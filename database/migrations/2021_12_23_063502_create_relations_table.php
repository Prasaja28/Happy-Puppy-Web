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

        Schema::table('subkota', function (Blueprint $table) {
            $table->foreignId('kota_id')
                ->nullable()
                ->constrained('kota')
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

        Schema::table('news', function (Blueprint $table) {
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

        Schema::table('waralabacontent', function (Blueprint $table) {
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('daftarlagu', function (Blueprint $table) {
        $table->foreignId('user_id')
                ->foreignId('kategori_id')
                ->nullable()
                ->constrained('users')
                ->constrained('kategori')
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
