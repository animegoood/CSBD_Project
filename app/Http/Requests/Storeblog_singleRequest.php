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
      'Blog_thumbnail' => 'file|image|required|mimes:png,jpg',
      'Blog_titles' => 'string|required',
      'Blog_descrioption' => 'string|required',
      'Blog_highlight_description' => 'string|required',
      'Blog_image' => 'file|image|required|mimes:png,jpg',
      'Blog_image_description' => 'string|required',

      'Blog_date' => 'required|date',
      'Blog_categories' => 'string|required',
      'Blog_author_image' => 'file|image|required|mimes:png,jpg',
      'Blog_author_name' => 'string|required',
      'Blog_author_description' => 'string|required'

    ];
  }

  public function messages()
  {
    return [



      'Blog_titles.string' => 'Blog_titles must be string',
      'Blog_titles.required' => 'Blog_titles name is required',

      'Blog_descrioption.string' => 'Blog_descrioption must be string',
      'Blog_descrioption.required' => 'Blog_descrioption name is required',

      'Blog_highlight_description.string' => 'Blog_highlight_description must be string',
      'Blog_highlight_description.required' => 'Blog_highlight_description name is required',




      'Blog_image_description.string' => 'Blog_image_description must be string',
      'Blog_image_description.required' => 'Blog_image_description name is required',

      'Blog_date.date' => 'Blog_date must be date',
      'Blog_date.required' => 'Blog_date name is required',

      'Blog_categories.string' => 'Blog_categories must be string',
      'Blog_categories.required' => 'Blog_categories name is required',

      'Blog_author_name.string' => 'Blog_author_name must be string',
      'Blog_author_name.required' => 'Blog_author_name name is required',

      'Blog_author_description.string' => 'Blog_author_description must be string',
      'Blog_author_description.required' => 'Blog_author_description name is required',


      'Blog_thumbnail.file' => 'Blog_thumbnail must be type of file',
      'Blog_thumbnail.image' => 'Blog_thumbnail must be image',

      'Blog_thumbnail.required' => 'You must choose a Blog_thumbnail',
      'Blog_thumbnail.mimes'=>'Blog_thumbnail must be jpg/png image',

      'Blog_image.file' => 'Blog_image must be type of file',
      'Blog_image.image' => 'Blog_image must be image',
      'Blog_image.required' => 'Blog_image must be required',
      'Blog_image.mimes' => 'Blog_image must be jpg/png image',

      'Blog_author_image.file' => 'Blog_author_image must be type of file',
      'Blog_author_image.image' => 'Blog_author_image must be image',
      'Blog_author_image.required' => 'Blog_author_image must be required',
      'Blog_author_image.mimes' => 'Blog_author_image must be jpg/png image',





    ];
  }
}
