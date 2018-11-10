<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:blogs,title,'.$this->route('blog'),
            'slug' => 'required|unique:blogs,slug,'.$this->route('blog'),
            'published_at' => 'required|date_format:'.config('app.date_format'),
            'author_id' => 'required',
            'content' => 'required',
        ];
    }
}
