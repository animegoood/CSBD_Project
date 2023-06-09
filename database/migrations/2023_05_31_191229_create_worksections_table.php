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
        Schema::create('worksections', function (Blueprint $table) {
            $table->id();


            $table->string('photography_name');
            $table->string('illustrator_name');
            $table->string('graphicDesign_name');

            $table->string('photography');
            $table->string('illustrator');
            $table->string('graphicDesign');
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
        Schema::dropIfExists('worksections');
    }
};
