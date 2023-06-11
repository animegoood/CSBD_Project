<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updateblog_singleRequest extends FormRequest
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
        'Blog_thumbnail' => 'file|image|mimes:png,jpg',
        'Blog_titles' => 'string',
        'Blog_descrioption' => 'string|',
        'Blog_highlight_description' => 'string',
        'Blog_image' => 'file|image|mimes:png,jpg',
        'Blog_image_description' => 'string',

        'Blog_date' => 'date',
        'Blog_categories' => 'string',
        'Blog_author_image' => 'file|image|mimes:png,jpg',
        'Blog_author_name' => 'string',
        'Blog_author_description' => 'string'

      ];
    }

    public function messages()
    {
      return [



        'Blog_titles.string' => 'Blog_titles must be string',


        'Blog_descrioption.string' => 'Blog_descrioption must be string',


        'Blog_highlight_description.string' => 'Blog_highlight_description must be string',





        'Blog_image_description.string' => 'Blog_image_description must be string',


        'Blog_date.date' => 'Blog_date must be date',


        'Blog_categories.string' => 'Blog_categories must be string',


        'Blog_author_name.string' => 'Blog_author_name must be string',


        'Blog_author_description.string' => 'Blog_author_description must be string',



        'Blog_thumbnail.file' => 'Blog_thumbnail must be type of file',
        'Blog_thumbnail.image' => 'Blog_thumbnail must be image',


        'Blog_thumbnail.mimes'=>'Blog_thumbnail must be jpg/png image',

        'Blog_image.file' => 'Blog_image must be type of file',
        'Blog_image.image' => 'Blog_image must be image',

        'Blog_image.mimes' => 'Blog_image must be jpg/png image',

        'Blog_author_image.file' => 'Blog_author_image must be type of file',
        'Blog_author_image.image' => 'Blog_author_image must be image',

        'Blog_author_image.mimes' => 'Blog_author_image must be jpg/png image',





      ];
    }
  }
