<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormkarirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formkarir', function (Blueprint $table) {
            $table->increments('formkarir_id');
            $table->string('status_penguasaan',25);
            $table->string('nama_pelamar',75);
            $table->string('pendidikan_formal',75);
            $table->string('pendidikan_informal',75);
            $table->string('jurusan',50);
            $table->string('tempat_lahir',50);
            $table->string('tanggal_lahir');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('jenis_kelamin');
            $table->string('agama',10);
            $table->string('status_marital',10);
            $table->string('telp',15);
            $table->string('no_hp',15);
            $table->string('email',64);
            $table->string('alamat_lengkap',100);
            $table->string('no_ktp',20);
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
        Schema::dropIfExists('formkarir');
    }
}
