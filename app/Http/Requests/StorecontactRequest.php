<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecontactRequest extends FormRequest
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

      'send_message_name' => 'string|required',
      'send_message_email' => 'email|required',


      'send_message_message' => 'string|required',


    ];
  }

  public function messages()
  {
    return [


      'send_message_name.string' => 'send_message_name must be string',
      'send_message_name.required' => 'send_message_name is required',




      'send_message_email.email' => 'send_message_email must be email',
      'send_message_email.required' => 'send_message_email is required',



      'send_message_name.string' => 'send_message_name must be string',
      'send_message_name.required' => 'send_message_name is required',


      'send_message_message.string' => 'send_message_message must be string',
      'send_message_message.required' => 'send_message_message is required',






    ];
  }
}
