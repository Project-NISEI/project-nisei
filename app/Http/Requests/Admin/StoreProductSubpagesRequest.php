<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductSubpagesRequest extends FormRequest
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
            'content' => 'required',
	    'product_id' => 'required',
        ];
    }
}
