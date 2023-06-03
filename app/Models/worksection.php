<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worksection extends Model
{
  use HasFactory;

  protected $fillable = [

    'photography_name',
    'illustrator_name',
    'graphicDesign_name',


    'photography',
    'illustrator',
    'graphicDesign'

  ];

  protected $table = 'worksections';
}
