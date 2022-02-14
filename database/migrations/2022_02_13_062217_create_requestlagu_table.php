<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestlaguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestlagu', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('member_id',32);
            $table->string('email',50);
            $table->string('phone',15);
            $table->text('request')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('requestlagu');
    }
}
