<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreaboutRequest extends FormRequest
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

      'aboutinfo' => 'string|required|max:150',

      'Yourname' => 'string|required|max:25',

      'Youremail' => 'email|required',

      'phone_number' => 'integer|required',

      'location' => 'string|required',

      'freelancer' => 'string|required',

      'experience' => 'string|required|max:20',

      'social_1' => 'string|required',

      'social_2' => 'string|required',

      'social_3' => 'string|required',

      'downloadCV' => 'image|required|file',


    ];
  }

  public function messages()
  {
    return [

      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',

      'aboutinfo.max' => 'aboutinfo Must be 150 Character.',

      'Yourname.string' => 'Yourname Must be a String.',

      'Yourname.required' => 'Yourname is required.',

      'Yourname.max' => 'Yourname Must be 25 Character.',



      'Youremail.email' => 'Youremail
  must be string',

      'Youremail.required' => 'Youremail is required',



      'phone_number.integer' => 'phone_number must be integer',

      'phone_number.required' => 'phone_number is required',



      'location.string' => 'location must be string',

      'location.required' => 'location name is required',


      'social_1.string' => 'social_1 must be string',

      'social_1.required' => 'social_1 is required',


      'social_2.string' => 'social_2 must be string',

      'social_2.required' => 'social_2 is required',


      'social_3.string' => 'social_3 must be string',

      'social_3.required' => 'social_3 is required',



      'downloadCV.file' => 'downloadCV must be type of file',

      'downloadCV.image' => 'downloadCV must be image',

      'downloadCV.required' => 'You must choose a downloadCV',
    ];
  }
}
