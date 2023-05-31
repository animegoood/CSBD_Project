<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;


    protected $fillable =[



      'send_message_name',
      'send_message_email',
      'send_message_subject',

      'send_message_message',





    ];


    protected $table ='contacts';


}
