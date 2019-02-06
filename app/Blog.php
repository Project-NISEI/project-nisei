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
        $headerImageTag = '<img src="' . url($this->attributes['listing_image']) . '"/>';
        $summary = self::substr_close_tags($this->content, 200);
        $closing = '<a href="'. url('/article/' . $this->slug) . '">Read full article at NISEI.net</a>';

        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->updated(new Carbon($this->published_at))
            ->summary($headerImageTag . '<br/>' . $summary . '<br><br>' . $closing)
            ->link('/article/' . $this->slug)
            ->author($this->author->name);
    }

    public static function getFeedItems()
    {
       return Blog::whereDate('published_at','<=', Carbon::now())->get();
    }

    // source: https://stackoverflow.com/a/34478897/251556
    function substr_close_tags($code, $limit = 200)
    {
        if ( strlen($code) <= $limit )
        {
            return $code;
        }

        $html = substr($code, 0, $limit);
        preg_match_all ( "#<([a-zA-Z]+)#", $html, $result );

        foreach($result[1] AS $key => $value)
        {
            if ( strtolower($value) == 'br' )
            {
                unset($result[1][$key]);
            }
        }
        $openedtags = $result[1];

        preg_match_all ( "#</([a-zA-Z]+)>#iU", $html, $result );
        $closedtags = $result[1];

        foreach($closedtags AS $key => $value)
        {
            if ( ($k = array_search($value, $openedtags)) === FALSE )
            {
                continue;
            }
            else
            {
                unset($openedtags[$k]);
            }
        }

        if ( empty($openedtags) )
        {
            if ( strpos($code, ' ', $limit) == $limit )
            {
                return $html."...";
            }
            else
            {
                return substr($code, 0, strpos($code, ' ', $limit))."...";
            }
        }

        $position = 0;
        $close_tag = '';
        foreach($openedtags AS $key => $value)
        {
            $p = strpos($code, ('</'.$value.'>'), $limit);

            if ( $p === FALSE )
            {
                $code .= ('</'.$value.'>');
            }
            else if ( $p > $position )
            {
                $close_tag = '</'.$value.'>';
                $position = $p;
            }
        }

        if ( $position == 0 )
        {
            return $code;
        }

        return substr($code, 0, $position).$close_tag."...";
    }
}
