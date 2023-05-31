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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

          //service item
            $table->text('service_icon');
            $table->string('service_name',20);
            $table->string('service_details',255);

          // testimonials item

            $table->text('testimonials_image');
            $table->string('testimonials_name');
            $table->string('testimonials_job');
            $table->string('testimonials_details');

          // pricing item

            $table->string('pricing_name');
            $table->string('pricing');
            $table->string('pricing_month');
            $table->string('pricing_services_1');
            $table->string('pricing_services_2');
            $table->string('pricing_services_3');
            $table->string('pricing_services_4');
            $table->string('pricing_services_5');

            $table->text('sponser_images');


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
        Schema::dropIfExists('services');
    }
};
