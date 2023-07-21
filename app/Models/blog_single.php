<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_single extends Model
{
  use HasFactory;

  protected $fillable = [


    'user_id',
    'Blog_thumbnail',
    'Blog_titles',
    'Blog_descrioption',
    'Blog_highlight_description',
    'Blog_image',
    'Blog_image_description',

    'Blog_date',
    'Blog_categories',
    'Blog_author_image',
    'Blog_author_name',
    'Blog_author_description'

  ];


  protected $table ='blog_singles';

  public function user(){
    blog_single::belongsTo(User::class);
  }

  public function categories(){
    blog_single::belongsTo(categories::class);
  }




}
