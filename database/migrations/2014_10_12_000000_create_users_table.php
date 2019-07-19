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
    public function up() //criar tabela
    {
        Schema::create('users', function (Blueprint $table) { //Blueprint::"tradutor" de SQL para PHP
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken(); //armazena as informações -ex:senha facebook- através de tokens para ter controler de login -- loguei no facebook, sai, desliguei o pc, voltei p/ server e já estava logado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //dropa tabela
    {
        Schema::dropIfExists('users');
    }
}
