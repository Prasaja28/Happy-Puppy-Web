<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubkotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subkota', function (Blueprint $table) {
            $table->id();
            $table->string('nama_subkota',50)->nullable();
            // $table->foreignId('kota_id')
            //     ->nullable()
            //     ->constrained('kota')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subkota');
    }
}
