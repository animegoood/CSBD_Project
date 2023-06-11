<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateworksectionRequest extends FormRequest
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




          'photography_name'=> 'string',
          'illustrator_name'=> 'string',

          'graphicDesign_name'=> 'string',

          'photography'=> 'file|image|mimes:png,jpg',
          'illustrator'=> 'file|image|mimes:png,jpg',
          'graphicDesign'=> 'file|image|mimes:png,jpg'





        ];
    }


    public function messages()
    {return[



      'photography_name.string' => 'photography_name must be string',



      'illustrator_name.string' => 'illustrator_name must be string',



      'graphicDesign_name.string' => 'graphicDesign_name must be string',




      'photography.file' => 'photography must be file',
      'photography.image' => 'photography must be image',
      'photography.mimes' => 'photography must be mimes',



      'illustrator.file' => 'illustrator must be file',
      'illustrator.image' => 'illustrator must be image',
      'illustrator.mimes' => 'illustrator must be mimes',


      'graphicDesign.file' => 'graphicDesign must be file',
      'graphicDesign.image' => 'graphicDesign must be image',
      'graphicDesign.mimes' => 'graphicDesign must be mimes',






    ];


    }
}
