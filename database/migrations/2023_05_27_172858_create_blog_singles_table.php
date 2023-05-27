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

            $table->string('blog_images');
            $table->string('main_contents');
            $table->string('content_imp_highlights');
            $table->string('rest_main_contents');
            $table->date('blog_post_dates');
            $table->array('categorieses');
            $table->string('author_images');
            $table->string('author_names');
            $table->string('author_descriptions');
         
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
