<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 *
 * @package App
 * @property string $question
 * @property text $answer
*/
class Faq extends Model
{
    protected $fillable = ['question', 'answer'];
    protected $hidden = [];

}
