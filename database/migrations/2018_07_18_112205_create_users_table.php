<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido')->nullable();
            $table->string('email')->unique();
            $table->string('telefone')->nullable();
            $table->string('password');
            $table->string('foto_perfil')->nullable();
            $table->integer('tipoUsuario');
            $table->integer('estado');
            $table->integer('enderecos_id')->unsigned()->nullable();
            $table->foreign('enderecos_id')->references('id')->on('enderecos');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
