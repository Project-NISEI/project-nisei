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
}
