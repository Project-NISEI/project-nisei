<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TournamentSet
 *
 * @package App
 * @property string $title
 * @property string $slug
*/
class TournamentSet extends Model
{
    protected $fillable = ['title', 'slug','display'];
    protected $hidden = [];
    
    public function tournaments() {
	return $this->hasMany('App\Tournament');
    }
    
    public static function getActive()
    {
       return TournamentSet::where('display','!=',0)->has('tournaments')->get();
    }
}
