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

        $table->string('intro');

        $table->string('aboutinfo');
        $table->string('Yourname');
        $table->string('Youremail');
        $table->integer('phone_number');
        $table->string('location');
        $table->string('freelancer');
        $table->string('experience');

        $table->text('downloadCV');

        $table->string('social_1');
        $table->string('social_2');
        $table->string('social_3');

        $table->string('work_1');
        $table->string('work_2');
        $table->string('work_3');

        $table->string('work_year_1');
        $table->string('work_year_2');
        $table->string('work_year_3');

        $table->string('work_description_1');
        $table->string('work_description_2');
        $table->string('work_description_3');

        $table->string('eduction_1');
        $table->string('eduction_2');
        $table->string('eduction_3');

        $table->string('education_year_1');
        $table->string('education_year_2');
        $table->string('education_year_3');

        $table->string('education_description_1');
        $table->string('education_description_2');
        $table->string('education_description_3');

        $table->integer('photoshop_skill_percent',);
        $table->integer('illustrator_skill_percent');
        $table->integer('figma_skill_percent');
        $table->integer('adobeXD_skill_percent');
        $table->integer('react_skill_percent');
        $table->integer('javascript_skill_percent');
        $table->integer('css_skill_percent');
        $table->integer('jquery_skill_percent');

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
