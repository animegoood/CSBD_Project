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

        $table->string('intro',80);

        $table->string('aboutinfo',150);
        $table->char('Yourname',25);
        $table->email('Youremail');
        $table->integer('phone_number');
        $table->string('location');
        $table->string('freelancer',10);
        $table->string('experience',10);

        $table->string('downloadCV');

        $table->string('social_1');
        $table->string('social_2');
        $table->string('social_3');

        $table->string('work_1',20);
        $table->string('work_2',20);
        $table->string('work_3',20);

        $table->string('work_year_1',10);
        $table->string('work_year_2',10);
        $table->string('work_year_3',10);

        $table->string('work_description_1',100);
        $table->string('work_description_2',100);
        $table->string('work_description_3',100);

        $table->string('eduction_1',20);
        $table->string('eduction_2',20);
        $table->string('eduction_3',20);

        $table->string('education_year_1',10);
        $table->string('education_year_2',10);
        $table->string('education_year_3',10);

        $table->string('education_description_1',100);
        $table->string('education_description_2',100);
        $table->string('education_description_3',100);

        $table->string('photoshop_skill_percent',10);
        $table->string('illustrator_skill_percent',10);
        $table->string('figma_skill_percent',10);
        $table->string('adobeXD_skill_percent',10);
        $table->string('react_skill_percent',10);
        $table->string('javascript_skill_percent',10);
        $table->string('css_skill_percent',10);
        $table->string('jquery_skill_percent',10);

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
