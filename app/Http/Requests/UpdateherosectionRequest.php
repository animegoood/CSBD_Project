<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateherosectionRequest extends FormRequest
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
          'name_Symbol' => 'string||max:1',

          'Yourname' => 'string||max:20',

          'profession_1' => 'string||max:20',

          'profession_2' => 'string||max:20',

          'social_1' => 'url',

          'social_2' => 'url',

          'social_3' => 'url',

          'Background_img' => 'file|image|',
          'Author_background_image' => 'file|image|'
        ];
    }
    public function messages()
    {
      return [
        'name_Symbol.string' => 'Name Symbol Must be a String.',

        'name_Symbol.max' => 'Name Symbol Must be 1 Character.',

        'Yourname.string' => 'Your Name must be string',

        'Yourname.max' => 'Your Name must be 20 Character',

        'profession_1.string' => 'profession_1 must be string',


        'profession_1.max' => 'profession_1 must be 20 Character',


        'profession_2.string' => 'profession_2 must be string',


        'profession_2.max' => 'profession_2 must be 20 Character',


        'social_1.url' => 'Mother\'s name is url',


        'social2.url' => 'Mother\'s name is url',


        'social_3.url' => 'Mother\'s name is url',

        'Background_img.file' => 'Background_img must be type of file',
        'Background_img.image' => 'Background_img must be image',



        'Author_background_image.file' => 'Author_background_image must be type of file',
        'Author_background_image.image' => 'Author_background_image must be image',


      ];
    }
}
