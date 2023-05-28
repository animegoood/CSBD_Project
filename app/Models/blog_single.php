<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_single extends Model
{
  use HasFactory;

  protected $fillable = [

    'blog_title',
    'blog_image',
    'main_content',
    'content_imp_highlight',
    'rest_main_content',
    'blog_post_date',
    'categories',
    'author_image',
    'author_name',
    'author_description',

  ];


  protected $table = 'blog_singles';
}
