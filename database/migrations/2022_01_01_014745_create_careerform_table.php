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
            $table->string('name', 50);
            $table->string('formal_education', 50);
            $table->string('place_birth', 50);
            $table->date('date_birth');
            $table->integer('height');
            $table->integer('weight');
            $table->string('gender',10);
            $table->string('status_marital',10);
            $table->string('phone', 20)->nullable();
            $table->string('mobile_phone', 20);
            $table->string('email', 50);
            $table->string('address');
            $table->string('no_ktp', 16);
            $table->integer('expected_salary');
            $table->string('language', 50)->nullable();
            $table->string('instrument_music', 50)->nullable();
            $table->string('computer', 50)->nullable();
            $table->string('other_expertise', 50)->nullable();
            $table->string('cv');
            $table->string('ijazah');
            $table->string('linkedin')->nullable();
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
