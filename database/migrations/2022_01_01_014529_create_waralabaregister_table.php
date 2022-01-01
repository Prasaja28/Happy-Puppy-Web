<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaralabaregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waralabaregister', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->boolean('gender');
            $table->string('age',2);
            $table->string('last_education',15);
            $table->boolean('marital');
            $table->string('city',64);
            $table->string('province',32);
            $table->string('official_address');
            $table->string('home_phone',16);
            $table->string('official_phone',16);
            $table->string('mobile_phone',15);
            $table->string('email',50);
            $table->string('job',30);
            $table->string('bussiness_field',50);
            $table->text('other')->nullable();
            $table->string('company_name',50);
            $table->string('postion_company',30);
            $table->text('other_2')->nullable();
            $table->string('address_2');
            $table->string('city_2',64);
            $table->string('province_2',32);
            $table->string('status_penguasaan',30);
            $table->string('address_3');
            $table->string('city_3',64);
            $table->string('province_3',32);
            $table->text('known_as_area');
            $table->text('other_3')->nullable();
            $table->integer('building_area');
            $table->string('left_business_name',50);
            $table->string('left_business_field',30);
            $table->string('right_business_name',50);
            $table->string('right_business_field',30);
            $table->string('front_business_name',50);
            $table->string('front_business_field',30);
            $table->string('behind_business_name',50);
            $table->string('behind_business_field',30);
            $table->integer('front_road_width');
            $table->string('front_road_traffic',30);
            $table->boolean('confirm_completenes');
            $table->boolean('confirm_register');
            $table->boolean('status');
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
        Schema::dropIfExists('waralabaregister');
    }
}
