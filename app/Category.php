<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App
 * @property string $title
*/
class Category extends Model
{
    protected $fillable = ['title', 'slug'];
    protected $hidden = [];
    
    
    
}
