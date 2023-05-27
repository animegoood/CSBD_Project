<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_single extends Model
{
    use HasFactory;

protected $fillable=[
  'blog_images',
  'main_contents',
  'content_imp_highlights',
  'rest_main_contents',
  'blog_post_dates',
  'categorieses',
  'author_images',
  'author_names',
  'author_descriptions',

];


protected $table='blog_singles';


}
