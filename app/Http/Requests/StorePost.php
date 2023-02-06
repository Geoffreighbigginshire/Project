<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Setting up some rules for the 'title'
            'title' => 'required|min:5|max:280',
            //Setting up some rules for the 'content'
            'content' => 'required|min:10|max:2000'
        ];
    }
}
