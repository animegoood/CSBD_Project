<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateaboutRequest extends FormRequest
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
        'intro' => 'string',

        'aboutinfo' => 'string',

        'Yourname' => 'string',

        'Youremail' => 'email',

        'phone_number' => 'integer',

        'location' => 'string',

        'freelancer' => 'string',

        'experience' => 'string',

        'social_1' => 'string',

        'social_2' => 'string',

        'social_3' => 'string',

        'downloadCV' => 'mimes:pdf|file',


        'work_1' => 'string',
        'work_2' => 'string',
        'work_3' => 'string',

        'work_year_1' => 'string',
        'work_year_2' => 'string',
        'work_year_3' => 'string',

        'work_description_1' => 'string',
        'work_description_2' => 'string',
        'work_description_3' => 'string',

        'eduction_1' => 'string',
        'eduction_2' => 'string',
        'eduction_3' => 'string',

        'education_year_1' => 'string',
        'education_year_2' => 'string',
        'education_year_3' => 'string',

        'education_description_1' => 'string',
        'education_description_2' => 'string',
        'education_description_3' => 'string',

        'photoshop_skill_percent' => 'integer',
        'illustrator_skill_percent' => 'integer',
        'figma_skill_percent' => 'integer',
        'adobeXD_skill_percent' => 'integer',
        'react_skill_percent' => 'integer',
        'javascript_skill_percent' => 'integer',
        'css_skill_percent' => 'integer',

        'jquery_skill_percent' => 'integer',


      ];
    }

    public function messages()
    {
      return [

        'aboutinfo.string' => 'aboutinfo Must be a String.',

        'Yourname.string' => 'Yourname Must be a String.',


        'Youremail.email' => 'Youremail
    must be email',



        'phone_number.integer' => 'phone_number must be integer',


        'location.string' => 'location must be string',


        'social_1.string' => 'social_1 must be string',



        'social_2.string' => 'social_2 must be string',


        'social_3.string' => 'social_3 must be string',



        'downloadCV.file' => 'downloadCV must be type of file',

        'downloadCV.mimes' => 'downloadCV must be pdf',



        'intro.string' => 'intro Must be a String.',



        'freelancer.string' => 'freelancer Must be a String.',


        'experience.string' => 'experience Must be a String.',

        'work_1.string' => 'work_1 Must be a String.',



        'work_2.string' => 'work_2 Must be a String.',



        'work_3.string' => 'work_3 Must be a String.',



        'work_year_1.string' => 'work_year_1 Must be a String.',



        'work_year_2.string' => 'work_year_2 Must be a String.',



        'work_year_3.string' => 'work_year_3 Must be a String.',



        'work_description_1.string' => 'work_description_1 Must be a String.',




        'work_description_2.string' => 'work_description_2 Must be a String.',




        'work_description_3.string' => 'work_description_3 Must be a String.',



        'eduction_1.string' => 'eduction_1 Must be a String.',




        'eduction_2.string' => 'eduction_2 Must be a String.',



        'eduction_3.string' => 'eduction_3 Must be a String.',



        'education_year_1.string' => 'education_year_1 Must be a String.',




        'education_year_2.string' => 'education_year_2 Must be a String.',



        'education_year_3.string' => 'education_year_3 Must be a String.',



        'education_description_1.string' => 'education_description_1 Must be a String.',




        'education_description_2.string' => 'education_description_2 Must be a String.',




        'education_description_3.string' => 'education_description_3 Must be a String.',



        'photoshop_skill_percent.integer' => 'photoshop_skill_percent Must be a integer.',







        'illustrator_skill_percent.integer' => 'illustrator_skill_percent Must be a integer.',







        'figma_skill_percent.integer' => 'figma_skill_percent Must be a integer.',








        'adobeXD_skill_percent.integer' => 'adobeXD_skill_percent Must be a integer.',





        'react_skill_percent.integer' => 'react_skill_percent Must be a integer.',









        'javascript_skill_percent.integer' => 'javascript_skill_percent Must be a integer.',





        'css_skill_percent.integer' => 'css_skill_percent Must be a integer.',






        'jquery_skill_percent.integer' => 'jquery_skill_percent Must be a integer.',









      ];
    }
  }

