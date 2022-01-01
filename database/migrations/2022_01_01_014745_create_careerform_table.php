<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careerform', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('formal_education',50);
            $table->string('informal_education',50);
            $table->string('jurusan',50);
            $table->string('place_birth',50);
            $table->date('date_birth');
            $table->integer('height');
            $table->integer('weight');
            $table->boolean('gender');
            $table->boolean('status_marital');
            $table->string('phone',15);
            $table->string('mobile_phone',15);
            $table->string('email',50);
            $table->string('address');
            $table->string('no_ktp',16);
            $table->integer('expected_salary');
            $table->string('language',50);
            $table->string('instrument_music',50);
            $table->string('computer',50);
            $table->text('other_expertise');
            $table->string('cv');
            $table->string('ijazah');
            $table->string('linkedin');
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
        Schema::dropIfExists('careerform');
    }
}
