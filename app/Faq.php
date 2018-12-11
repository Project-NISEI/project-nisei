<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 *
 * @package App
 * @property string $question
 * @property text $answer
 * @property integer $index
*/
class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'index'];
    protected $hidden = [];

}
