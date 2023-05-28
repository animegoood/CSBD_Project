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

            $table->string('blog_title');

            $table->string('blog_image');
            $table->string('main_content',255);
            $table->string('content_imp_highlight',255);
            $table->string('rest_main_content',255);
            $table->date('blog_post_date');
            $table->string('categories');
            $table->string('author_image');
            $table->string('author_name',20);
            $table->string('author_description',100);

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
