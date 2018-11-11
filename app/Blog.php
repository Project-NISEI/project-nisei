<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

/**
 * Class Blog
 *
 * @package App
 * @property string $title
 * @property string $slug
 * @property string $published_at
 * @property text $content
 * @property string $author
 * @property string $category
*/
class Blog extends Model implements Feedable
{
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'published_at', 'listing_image', 'content', 'author_id', 'category_id'];
    protected $hidden = [];
    
    

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setPublishedAtAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['published_at'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['published_at'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getPublishedAtAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAuthorIdAttribute($input)
    {
        $this->attributes['author_id'] = $input ? $input : null;
    }
    
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCategoryIdAttribute($input)
    {
        $this->attributes['category_id'] = $input ? $input : null;
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function toFeedItem()
    {
        $summary = substr(strip_tags($this->content), 200);

        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->updated(new Carbon($this->published_at))
            ->summary($summary)
            ->link('/article/' . $this->slug)
            ->author($this->author->name);
    }
    
    public static function getFeedItems()
    {
       return Blog::all();
    }
}
