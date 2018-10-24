<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FAQ
 *
 * @package App
 * @property string $question
 * @property text $answer
*/
class FAQ extends Model
{
    protected $fillable = ['question', 'answer'];
    protected $hidden = [];

}
