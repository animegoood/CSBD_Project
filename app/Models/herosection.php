<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class herosection extends Model
{
  use HasFactory;



  protected $fillable = [
    'name_Symbol',
    'Yourname',
    'profession_1',
    'profession_2',
    'social_1',
    'social_2',
    'social_3',
    // 'downloadCV',
    'Background_img',
    'Author_background_image'
  ];

  protected $table = 'herosection';
}
