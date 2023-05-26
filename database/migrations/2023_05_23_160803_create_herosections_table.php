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
    Schema::create('herosection', function (Blueprint $table) {
      
      $table->char('name_Symbol', 1);
      $table->char('Yourname',25);
      $table->char('profession_1',25);
      $table->char('profession_2', 25);
      $table->string('social_1');
      $table->string('social_2');
      $table->string('social_3');
      // $table->string('downloadCV');
      $table->string('Background_img');
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
    Schema::dropIfExists('herosection');
  }
};
