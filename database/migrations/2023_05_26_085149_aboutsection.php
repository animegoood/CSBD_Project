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
      Schema::create('aboutsection', function (Blueprint $table) {

        $table->id();

        $table->string('aboutinfo');
        $table->char('Yourname',25);
        $table->string('Youremail')->unique();
        $table->integer('phone_number');
        $table->string('location');
        $table->string('freelancer');
        $table->string('experience');
        $table->string('social_1');
        $table->string('social_2');
        $table->string('social_3');
        $table->timestamps();

    });
     }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema::dropIfExists('aboutsection');
    }

  };
