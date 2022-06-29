<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('roles_users', function (Blueprint $table) {
            $table->foreignId('roles_id')
                ->constrained('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('roles_users', function (Blueprint $table) {
            $table->foreignId('users_id')
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
        Schema::dropIfExists('roles_users');
    }
}
