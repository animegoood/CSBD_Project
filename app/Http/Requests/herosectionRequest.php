<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class herosectionRequest extends FormRequest
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
          'name_Symbol' => 'string|required|max:1',

          'Yourname' => 'string|required|max:25',

          'profession_1' => 'string|required|max:25',

          'profession_2' => 'string|required|max:25',

          'social_1' => 'string|required',

          'social_2' => 'string|required',

          'social_3' => 'string|required',

          'Background_img' => 'file|image|required'
        ];
}

public function messages()
{
  return [
    'name_Symbol.string' => 'Name Symbol Must be a String.',
    'name_Symbol.required' => 'Name Symbol is required.',
    'name_Symbol.max:1' => 'Name Symbol Must be 1 Character.',

    'Yourname.string' => 'Your Name must be string',
    'Yourname.required' => 'Your Name is required',
    'Yourname.max:25' => 'Your Name must be 25 Character',

    'profession_1.string' => 'profession_1 must be string',
    'profession_1.required' => 'profession_1 name is required',

    'profession_1.max:25' => 'profession_1 must be 25 Character',


    'profession_2.string' => 'profession_2 must be string',
    'profession_2.required' => 'profession_2 name is required',

    'profession_2.max:25' => 'profession_2 must be 25 Character',

    'social_1.string' => 'Mother\'s must be string',
    'social_1.required' => 'Mother\'s name is required',

    'social2.string' => 'Mother\'s must be string',
    'social2.required' => 'Mother\'s name is required',

    'social_3.string' => 'Mother\'s must be string',
    'social_3.required' => 'Mother\'s name is required',

    'Background_img.file' => 'Background_img must be type of file',
    'Background_img.image' => 'Background_img must be image',

    'Background_img.required' => 'You must choose a Background_img',
  ];
}
}

