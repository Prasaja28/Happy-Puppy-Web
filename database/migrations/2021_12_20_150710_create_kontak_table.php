<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->increments('kontak_id');
            $table->string('country_name',64);
            $table->string('member',32);
            $table->string('no_member',32);
            $table->string('telp',15);
            $table->string('hp',15);
            $table->string('email',64);
            $table->string('pesan',64);
            $table->string('alamat',32);
            $table->string('kodepos',10);
            $table->string('kota',32);
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
        Schema::dropIfExists('kontak');
    }
}
