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
      'send_message_subject'=> 'string|required',

      'send_message_message'=> 'string|required',


        ];
    }
}
