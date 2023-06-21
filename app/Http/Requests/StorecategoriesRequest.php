<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecategoriesRequest extends FormRequest
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

        'category_name' => 'string|required',
      ];
    }

    public function messages()
    {
      return [


        'category_name.string' => 'category_name must be string',
        'category_name.required' => 'category_name is required',


      ];
    }
}
