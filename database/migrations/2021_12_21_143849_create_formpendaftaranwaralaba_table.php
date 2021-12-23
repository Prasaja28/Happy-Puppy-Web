<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormpendaftaranwaralabaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formpendaftaranwaralaba', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->boolean('jenis_kelamin');
            $table->integer('umur');
            $table->string('pendidikan',20);
            $table->string('alamat_resmi',100);
            $table->string('kota_resmi', 20);
            $table->string('provinsi_resmi', 20);
            $table->string('telp_kantor', 15);
            $table->string('email_resmi', 64);
            $table->string('telp_rumah', 15);
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
        Schema::dropIfExists('formpendaftaranwaralaba');
    }
}
