<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 *
 * @package App
 * @property string $question
 * @property text $answer
 * @property integer $position
*/
class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'position'];
    protected $hidden = [];

}
