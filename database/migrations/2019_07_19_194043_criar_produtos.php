<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //aplica conceito de polimorfismo por causa do "Migration" da linha 7
    {
        //
        Schema::create('produtos', function(Blueprint $table){ //create espera dois parametros(tabela, Blueprint)
            $table->bigIncrements('id');
            $table->string('nome_produto');
            $table->bigInterger('id_categoria'); //altera a tabela de todo mundo com o novo campo que foi criado(GIT) -- para rodar: php artisan (re)fresh
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
