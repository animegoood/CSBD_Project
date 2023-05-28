<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeblog_singleRequest extends FormRequest
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
        'main_content' => 'string|required|max:255',

        'content_imp_highlight' => 'string|required|max:255',

        'rest_main_content' => 'string|required|max:255',

        'blog_post_date' => 'date|required',

        'categories' => 'string|required',

        'author_name' => 'string|required|max:20',

        'author_description' => 'string|required|max:200',

        'blog_image' => 'file|image|required',
        'author_image' => 'file|image|required'


      ];
}

public function messages()
{
return [
  'name_Symbol.string' => 'Name Symbol Must be a String.',
  'name_Symbol.required' => 'Name Symbol is required.',
  'name_Symbol.max' => 'Name Symbol Must be 1 Character.',

  'Yourname.string' => 'Your Name must be string',
  'Yourname.required' => 'Your Name is required',
  'Yourname.max' => 'Your Name must be 20 Character',

  'profession_1.string' => 'profession_1 must be string',
  'profession_1.required' => 'profession_1 name is required',

  'profession_1.max' => 'profession_1 must be 20 Character',


  'profession_2.string' => 'profession_2 must be string',
  'profession_2.required' => 'profession_2 name is required',

  'profession_2.max' => 'profession_2 must be 20 Character',

  'social_1.string' => 'Mother\'s must be string',
  'social_1.required' => 'Mother\'s name is required',

  'social2.string' => 'Mother\'s must be string',
  'social2.required' => 'Mother\'s name is required',

  'social_3.string' => 'Mother\'s must be string',
  'social_3.required' => 'Mother\'s name is required',

  'blog_image.file' => 'blog_image must be type of file',
  'blog_image.image' => 'blog_image must be image',

  'blog_image.required' => 'You must choose a blog_image',

  'author_image.file' => 'author_image must be type of file',
  'author_image.image' => 'author_image must be image',

  'author_image.required' => 'You must choose a author_image',
];
}
}

