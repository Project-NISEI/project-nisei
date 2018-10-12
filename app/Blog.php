<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 *
 * @package App
 * @property string $title
 * @property string $slug
 * @property string $published_at
 * @property string $author
 * @property text $content
*/
class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'published_at', 'content', 'author_id'];
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
    
}
