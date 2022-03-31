<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('roles_id')
                ->nullable()
                ->constrained('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('jobvacancy', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('news', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('faq', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('songlist', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('topartist', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('kontak', function (Blueprint $table) {
            $table->foreignId('outlet_id')
                ->nullable()
                ->constrained('outlet')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        
        Schema::table('requestlagu', function (Blueprint $table) {
            $table->foreignId('outlet_id')
                ->nullable()
                ->constrained('outlet')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        
        Schema::table('keluhan', function (Blueprint $table) {
            $table->foreignId('outlet_id')
                ->nullable()
                ->constrained('outlet')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('citysub', function (Blueprint $table) {
            $table->foreignId('city_id')
                ->nullable()
                ->constrained('city')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('careerform', function (Blueprint $table) {
            $table->foreignId('jobvacancy_id')
                ->nullable()
                ->constrained('jobvacancy')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        
         Schema::table('jobexpertise', function (Blueprint $table) {
            $table->foreignId('careerform_id')
                ->nullable()
                ->constrained('careerform')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('city', function (Blueprint $table) {
            $table->foreignId('citysub_id')
                ->nullable()
                ->constrained('citysub')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('outlet', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('outlet', function (Blueprint $table) {
            $table->foreignId('city_id')
                ->nullable()
                ->constrained('city')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('outlet', function (Blueprint $table) {
            $table->foreignId('citysub_id')
                ->nullable()
                ->constrained('citysub')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('profil', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
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
        Schema::dropIfExists('relations');
    }
}
