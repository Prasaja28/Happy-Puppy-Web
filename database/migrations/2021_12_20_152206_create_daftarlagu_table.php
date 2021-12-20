<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarlaguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarlagu', function (Blueprint $table) {
            $table->increments('daftarlagu_id');
            $table->string('judul',100);
            $table->string('penyanyi',100);
            $table->string('pencipta',255);
            $table->string('label',100);
            $table->string('kode_disk',32);
            $table->date('tanggal');
            $table->string('asli',32);
            $table->string('ref',32);
            $table->string('picture',128);
            $table->string('category',32);
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
        Schema::dropIfExists('daftarlagu');
    }
}
