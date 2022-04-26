<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlet', function (Blueprint $table) {
            $table->id();
            $table->char('province_id', 2);
            $table->char('city_id', 4);
            $table->char('citysub_id', 7);
            $table->string('thumbnail');
            $table->string('name',50);
            $table->string('address');
            $table->string('phone',15);
            $table->string('fax',15);
            $table->text('link_ig');
            $table->text('link_2');
            $table->timestamps();
            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('city_id')
                ->references('id')
                ->on('regencies')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('citysub_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('cascade')->onDelete('restrict');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outlet');
    }
}
