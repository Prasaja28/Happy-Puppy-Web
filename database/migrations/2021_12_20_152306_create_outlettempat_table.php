<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutlettempatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlettempat', function (Blueprint $table) {
            $table->increments('outlet_id');
            $table->string('outlet_picture',100);
            $table->string('title_outlet',30);
            $table->string('alamat_outlet',50);
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
        Schema::dropIfExists('outlettempat');
    }
}
