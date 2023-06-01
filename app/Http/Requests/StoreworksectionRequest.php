<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreworksectionRequest extends FormRequest
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


          'photography'=> 'file|image|mimes:png,jpg|required',
          'illustrator'=> 'file|image|mimes:png,jpg|required',
          'graphicDesign'=> 'file|image|mimes:png,jpg|required'





        ];
    }


    public function messages()
    {return[



      'photography.file' => 'photography must be file',
      'photography.image' => 'photography must be image',
      'photography.mimes' => 'photography must be mimes',
      'photography.required' => 'photography must be required',


      'illustrator.file' => 'illustrator must be file',
      'illustrator.image' => 'illustrator must be image',
      'illustrator.mimes' => 'illustrator must be mimes',
      'illustrator.required' => 'illustrator must be required',


      'graphicDesign.file' => 'graphicDesign must be file',
      'graphicDesign.image' => 'graphicDesign must be image',
      'graphicDesign.mimes' => 'graphicDesign must be mimes',
      'graphicDesign.required' => 'graphicDesign must be required'






    ];


    }
}
