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
        Schema::create('admin_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('profession');

            $table->string('city');
            $table->string('profession_joinend');
            $table->string('role');
            $table->string('country');
            $table->string('language');
            $table->string('contact');
            $table->string('skype');
            $table->string('email');
            $table->string('admin_image');
            $table->string('cover_image');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');

             $table->string('');
             $table->string('');
             $table->string('');
             $table->string('');
             $table->string('');
             $table->string('');
             $table->string('');

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
        Schema::dropIfExists('admin_profiles');
    }
};
