<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateservicesRequest extends FormRequest
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



        "service_icon" => "string",
        "service_name" => "string",
        "service_description" => "string",

        "testimonials_image" => "file|image|mimes:png,jpg",
        "testimonials_name" => "string",
        "testimonials_job" => "string",
        "testimonials_description" => "string",


        "pricing_name" => "string",
        "pricing" => "integer",
        "pricing_month" => "string",
        "pricing_services_1" => "string",
        "pricing_services_2" => "string",
        "pricing_services_3" => "string",
        "pricing_services_4" => "string",
        "pricing_services_5" => "string",

        "sponser_images" =>  "file|image|mimes:png,jpg",

      ];
    }

    public function messages()
    {
      return[


        '  service_icon.string' => '  service_icon Must be string.',


        'service_name.string' => 'service_name Must be a String.',


        'service_description.string' => 'service_description Must be a String.',




        'testimonials_image.file' => 'testimonials_image Must be a file.',
        'testimonials_image.image' => 'testimonials_image Must be  image.',
        'testimonials_image.mimes' => 'testimonials_image Must be a mimes.',

        'testimonials_name.string' => 'testimonials_name Must be a String.',

        'testimonials_job.string' => 'testimonials_job Must be a String.',

        'testimonials_description.string' => 'testimonials_description Must be a String.',

        'pricing_name.string' => 'pricing_name Must be a String.',

        'pricing.integer' => 'pricing Must be a integer.',

        'pricing_month.string' => 'pricing_month Must be a String.',

        'pricing_services_1.string' => 'pricing_services_1 Must be a String.',

        'pricing_services_2.string' => 'pricing_services_2 Must be a String.',

        'pricing_services_3.string' => 'pricing_services_3 Must be a String.',

        'pricing_services_4.string' => 'pricing_services_4 Must be a String.',

        'pricing_services_5.string' => 'pricing_services_5 Must be a String.',

        'sponser_images.file' => 'sponser_images Must be a file.',
        'sponser_images.image' => 'sponser_images Must be  image.',
        'sponser_images.mimes' => 'sponser_images Must be a mimes.',
        



      ];
    }
  }
