<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('blog_singles', function (Blueprint $table) {
      $table->id();

      $table->unsignedBigInteger('user_id');

      $table->string('Blog_thumbnail');
      $table->string('Blog_titles');
      $table->string('Blog_descrioption');
      $table->string('Blog_highlight_description');
      $table->string('Blog_image');
      $table->string('Blog_image_description');



      $table->string('Blog_date');
      $table->string('Blog_categories');

      $table->string('Blog_author_image');
      $table->string('Blog_author_name');
      $table->string('Blog_author_description');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('blog_singles');
  }
};
