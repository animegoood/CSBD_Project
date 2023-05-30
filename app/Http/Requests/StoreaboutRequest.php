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
      'intro' => 'string|required',

      'aboutinfo' => 'string|required',

      'Yourname' => 'string|required',

      'Youremail' => 'email|required',

      'phone_number' => 'integer|required',

      'location' => 'string|required',

      'freelancer' => 'string|required',

      'experience' => 'string|required',

      'social_1' => 'string|required',

      'social_2' => 'string|required',

      'social_3' => 'string|required',

      'downloadCV' => 'image|required|file',


      'work_1' => 'string|required',
      'work_2' => 'string|required',
      'work_3' => 'string|required',

      'work_year_1' => 'string|required',
      'work_year_2' => 'string|required',
      'work_year_3' => 'string|required',

      'work_description_1' => 'string|required',
      'work_description_2' => 'string|required',
      'work_description_3' => 'string|required',

      'eduction_1' => 'string|required',
      'eduction_2' => 'string|required',
      'eduction_3' => 'string|required',

      'education_year_1' => 'string|required',
      'education_year_2' => 'string|required',
      'education_year_3' => 'string|required',

      'education_description_1' => 'string|required',
      'education_description_2' => 'string|required',
      'education_description_3' => 'string|required',

      'photoshop_skill_percent' => 'string|required',
      'illustrator_skill_percent' => 'string|required',
      'figma_skill_percent' => 'string|required',
      'adobeXD_skill_percent' => 'string|required',
      'react_skill_percent' => 'string|required',
      'javascript_skill_percent' => 'string|required',
      'css_skill_percent' => 'string|required',

      'jquery_skill_percent' => 'string|required',


    ];
  }

  public function messages()
  {
    return [

      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',

      'Yourname.string' => 'Yourname Must be a String.',

      'Yourname.required' => 'Yourname is required.',

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



      'intro.string' => 'intro Must be a String.',

      'intro.required' => 'intro is required.',



      'freelancer.string' => 'freelancer Must be a String.',

      'freelancer.required' => 'freelancer is required.',



      'experience.string' => 'experience Must be a String.',

      'experience.required' => 'experience is required.',


      'work_1.string' => 'work_1 Must be a String.',

      'work_1.required' => 'work_1 is required.',



      'work_2.string' => 'work_2 Must be a String.',

      'work_2.required' => 'work_2 is required.',



      'work_3.string' => 'work_3 Must be a String.',

      'work_3.required' => 'work_3 is required.',



      'work_year_1.string' => 'work_year_1 Must be a String.',

      'work_year_1.required' => 'work_year_1 is required.',



      'work_year_2.string' => 'work_year_2 Must be a String.',

      'work_year_2.required' => 'work_year_2 is required.',



      'work_year_3.string' => 'work_year_3 Must be a String.',

      'work_year_3.required' => 'work_year_3 is required.',



      'work_description_1.string' => 'work_description_1 Must be a String.',

      'work_description_1.required' => 'work_description_1 is required.',



      'work_description_2.string' => 'work_description_2 Must be a String.',

      'work_description_2.required' => 'work_description_2 is required.',



      'work_description_3.string' => 'work_description_3 Must be a String.',

      'work_description_3.required' => 'work_description_3 is required.',



      'eduction_1.string' => 'eduction_1 Must be a String.',

      'eduction_1.required' => 'eduction_1 is required.',



      'eduction_2.string' => 'eduction_2 Must be a String.',

      'eduction_2.required' => 'eduction_2 is required.',



      'eduction_3.string' => 'eduction_3 Must be a String.',

      'eduction_3.required' => 'eduction_3 is required.',



      'education_year_1.string' => 'education_year_1 Must be a String.',

      'education_year_1.required' => 'education_year_1 is required.',



      'education_year_2.string' => 'education_year_2 Must be a String.',

      'education_year_2.required' => 'education_year_2 is required.',



      'education_year_3.string' => 'education_year_3 Must be a String.',

      'education_year_3.required' => 'education_year_3 is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',


      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



      'aboutinfo.string' => 'aboutinfo Must be a String.',

      'aboutinfo.required' => 'aboutinfo is required.',



    ];
  }
}
