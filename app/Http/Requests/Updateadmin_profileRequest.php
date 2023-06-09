<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updateadmin_profileRequest extends FormRequest
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

        'admin_name' => 'string',
        'profession'=> 'string',
        'city'=> 'string',

        'profession_joinend'=> 'string',
        'role'=> 'string',
        'country'=> 'string',
        'language'=> 'string',


        'contact'=> 'string',
        'skype'=> 'string',
        'email'=> 'email',
        'admin_image' => 'file|image|mimes:png,jpg',
        'cover_image' => 'file|image|mimes:png,jpg',

      ];
    }

      public function messages()
      {
        return [


          'admin_name.string' => 'admin_name must be string',


          'profession.string' => 'profession must be string',

          'city.string' => 'city must be string',


          'profession_joinend.string' => 'profession_joinend must be string',


          'role.string' => 'role must be string',


          'country.string' => 'country must be string',


          'skype.string' => 'skype must be string',


          'email.string' => 'email must be string',


          'admin_image.file' => 'admin_image must be file',
          'admin_image.image' => 'admin_image must be image',
          'admin_image.mimes' => 'admin_image must be mimes',



          'cover_image.file' => 'cover_image must be file',
          'cover_image.image' => 'cover_image must be image',
          'cover_image.mimes' => 'cover_image must be mimes',
         


        ];
    }
}
