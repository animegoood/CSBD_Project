<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeadmin_profileRequest extends FormRequest
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

      'admin_name' => 'string|required',
      'profession'=> 'string|required',
      'city'=> 'string|required',

      'profession_joinend'=> 'string|required',
      'role'=> 'string|required',
      'country'=> 'string|required',
      'language'=> 'string|required',


      'contact'=> 'string|required',
      'skype'=> 'string|required',
      'email'=> 'email|required',
      'admin_image' => 'file|image|mimes:png,jpg|required',
      'cover_image' => 'file|image|mimes:png,jpg|required',

    ];
  }

    public function messages()
    {
      return [


        'admin_name.string' => 'admin_name must be string',
        'admin_name.required' => 'admin_name must be required',

        'profession.string' => 'profession must be string',
        'profession.required' => 'profession must be required',

        'city.string' => 'city must be string',
        'city.required' => 'city must be required',

        'profession_joinend.string' => 'profession_joinend must be string',
        'profession_joinend.required' => 'profession_joinend must be required',

        'role.string' => 'role must be string',
        'role.required' => 'role must be required',

        'country.string' => 'country must be string',
        'country.required' => 'country must be required',

        'skype.string' => 'skype must be string',
        'skype.required' => 'skype must be required',

        'email.string' => 'email must be string',
        'email.required' => 'email must be required',

        'admin_image.file' => 'admin_image must be file',
        'admin_image.image' => 'admin_image must be image',
        'admin_image.mimes' => 'admin_image must be mimes',
        'admin_image.required' => 'admin_image must be required',


        'cover_image.file' => 'cover_image must be file',
        'cover_image.image' => 'cover_image must be image',
        'cover_image.mimes' => 'cover_image must be mimes',
        'cover_image.required' => 'cover_image must be required',


      ];
  }
}
