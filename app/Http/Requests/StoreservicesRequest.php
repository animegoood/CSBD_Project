<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreservicesRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return false;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [


      "service_icon" => "file|image|mimes:png,jpg|required",
      "service_name" => "string|required",
      "service_details" => "string|required",

      "testimonials_image" => "file|image|mimes:png,jpg|required",
      "testimonials_name" => "string|required",
      "testimonials_job" => "string|required",
      "testimonials_details" => "string|required",


      "pricing_name" => "string|required",
      "pricing" => "string|required",
      "pricing_month" => "string|required",
      "pricing_services_1" => "string|required",
      "pricing_services_2" => "string|required",
      "pricing_services_3" => "string|required",
      "pricing_services_4" => "string|required",
      "pricing_services_5" => "string|required",

      "sponser_images" =>  "file|image|mimes:png,jpg|required",

    ];
  }

  public function messages()
  {
    return[


      'service_icon.file' => 'service_icon Must be a file.',
      'service_icon.image' => 'service_icon Must be  image.',
      'service_icon.mimes' => 'service_icon Must be a mimes.',
      'service_icon.required' => 'service_icon is required.',

      'service_name.string' => 'service_name Must be a String.',
      'service_name.required' => 'service_name is required.',

      'service_details.string' => 'service_details Must be a String.',
      'service_details.required' => 'service_details is required.',


      'testimonials_image.file' => 'testimonials_image Must be a file.',
      'testimonials_image.image' => 'testimonials_image Must be  image.',
      'testimonials_image.mimes' => 'testimonials_image Must be a mimes.',
      'testimonials_image.required' => 'testimonials_image is required.',

      'testimonials_name.string' => 'testimonials_name Must be a String.',
      'testimonials_name.required' => 'testimonials_name is required.',

      'testimonials_job.string' => 'testimonials_job Must be a String.',
      'testimonials_job.required' => 'testimonials_job is required.',

      'testimonials_details.string' => 'testimonials_details Must be a String.',
      'testimonials_details.required' => 'testimonials_details is required.',

      'pricing_name.string' => 'pricing_name Must be a String.',
      'pricing_name.required' => 'pricing_name is required.',

      'pricing.string' => 'pricing Must be a String.',
      'pricing.required' => 'pricing is required.',

      'pricing_month.string' => 'pricing_month Must be a String.',
      'pricing_month.required' => 'pricing_month is required.',

      'pricing_services_1.string' => 'pricing_services_1 Must be a String.',
      'pricing_services_1.required' => 'pricing_services_1 is required.',

      'pricing_services_2.string' => 'pricing_services_2 Must be a String.',
      'pricing_services_2.required' => 'pricing_services_2 is required.',

      'pricing_services_3.string' => 'pricing_services_3 Must be a String.',
      'pricing_services_3.required' => 'pricing_services_3 is required.',

      'pricing_services_4.string' => 'pricing_services_4 Must be a String.',
      'pricing_services_4.required' => 'pricing_services_4 is required.',

      'pricing_services_5.string' => 'pricing_services_5 Must be a String.',
      'pricing_services_5.required' => 'pricing_services_5 is required.',

      'sponser_images.file' => 'sponser_images Must be a file.',
      'sponser_images.image' => 'sponser_images Must be  image.',
      'sponser_images.mimes' => 'sponser_images Must be a mimes.',
      'sponser_images.required' => 'sponser_images is required.',




    ];
  }
}
