<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
  use HasFactory;

  protected $fillable =
  [
    'intro',
    'aboutinfo',
    'Yourname',
    'Youremail',
    'phone_number',
    'location',
    'freelancer',
    'experience',
    'downloadCV',

    'social_1',
    'social_2',
    'social_3',

    'work_1',
    'work_2',
    'work_3',

    'work_year_1',
    'work_year_2',
    'work_year_3',

    'work_description_1',
    'work_description_2',
    'work_description_3',

    'eduction_1',
    'eduction_2',
    'eduction_3',

    'education_year_1',
    'education_year_2',
    'education_year_3',

    'education_description_1',
    'education_description_2',
    'education_description_3',

    'photoshop_skill_percent',
    'illustrator_skill_percent',
    'figma_skill_percent',
    'adobeXD_skill_percent',
    'react_skill_percent',
    'javascript_skill_percent',
    'css_skill_percent',

    'jquery_skill_percent',
  ];
  protected $table ='aboutsection';
}
