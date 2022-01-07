<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailjobexpertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailjobexpertises', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('detailjobexpertises', function (Blueprint $table) {
            $table->foreignId('careerform_id')
                ->nullable()
                ->constrained('citysub')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('detailjobexpertises', function (Blueprint $table) {
            $table->foreignId('jobexpertise_id')
                ->nullable()
                ->constrained('jobexpertise')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailjobexpertises');
    }
}
