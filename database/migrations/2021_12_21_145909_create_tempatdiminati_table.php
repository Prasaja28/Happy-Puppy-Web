<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatdiminatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempatdiminati', function (Blueprint $table) {
            $table->increments('tempat_id');
            $table->string('status_penguasaan');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('dikenal_sebagai');
            $table->string('lainlain');
            $table->string('luas_bangunan');
            $table->string('nama_usaha');
            $table->string('bidang_usaha');
            $table->string('lebar_jalan_depan');
            $table->string('luas_jalan_depan');
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
        Schema::dropIfExists('tempatdiminati');
    }
}
