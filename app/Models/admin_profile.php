<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_profile extends Model
{
  use HasFactory;


  protected $fillable = [


    'admin_name',
    'profession',
    'city',

    'profession_joinend',
    'role',
    'country',
    'language',






    'contact',
    'skype',
    'email',
    'admin_image',
    'cover_image',

  ];


  protected $table = 'admin_profiles';
}
