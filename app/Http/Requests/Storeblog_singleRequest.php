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

      'blog_title' => 'string|required|max:100',

      'main_content' => 'string|required|max:255',

      'content_imp_highlight' => 'string|required|max:255',

      'rest_main_content' => 'string|required|max:255',

      'blog_post_date' => 'date|required',

      'categories' => 'string|required',

      'author_name' => 'string|required|max:20',

      'author_description' => 'string|required|max:100',

      'blog_image' => 'file|image|required',
      'author_image' => 'file|image|required'


    ];
  }

  public function messages()
  {
    return [

      'blog_title.string' => 'blog_title Must be a String.',

      'blog_title.required' => 'blog_title is required.',
      'blog_title.max'=>'blog_title Must be 255 Character.',

      'main_content.string' => 'main_content Must be a String.',

      'main_content.required' => 'main_content is required.',

      'main_content.max' => 'main_content Must be 255 Character.',



      'content_imp_highlight.string' => 'content_imp_highlight
  must be string',

      'content_imp_highlight.required' => 'content_imp_highlight is required',

      'content_imp_highlight.max' => 'content_imp_highlight must be 255 Character',


      'rest_main_content.string' => 'rest_main_content must be string',

      'rest_main_content.required' => 'rest_main_content name is required',

      'rest_main_content.max' => 'Rest Main Content must be 255 Character',

      'blog_post_date.date' => 'Date must be date',

      'blog_post_date.required' => 'Date is required',

      'categories.string' => 'categories must be string',

      'categories.required' => 'categories is required',

      'author_name.string' => 'author_name must be string',

      'author_name.required' => 'author_name is required',

      'author_name.max' => 'author_name must be 20 Character',

      'author_description.string' => 'author_description must be string',

      'author_description.required' => 'author_description is required',

      'author_description.max' => 'author_description must be 100 Character',

      'blog_image.file' => 'blog_image must be type of file',

      'blog_image.image' => 'blog_image must be image',

      'blog_image.required' => 'You must choose a blog_image',

      'author_image.file' => 'author_image must be type of file',

      'author_image.image' => 'author_image must be image',

      'author_image.required' => 'You must choose a author_image',
    ];
  }
}
