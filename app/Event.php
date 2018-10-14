<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 *
 * @package App
 * @property string $name
 * @property enum $type
*/
class Event extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'type'];
    protected $hidden = [];
    
    

    public static $enum_type = ["GNK" => "GNK", "Store Championship" => "Store Championship", "Regional Championship" => "Regional Championship", "National Championship" => "National Championship", "Continental Championship" => "Continental Championship", "World Championship" => "World Championship", "Other" => "Other"];
    
}
