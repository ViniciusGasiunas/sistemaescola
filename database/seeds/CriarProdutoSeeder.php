<?php

use Illuminate\Database\Seeder;
use App\Produto;

class CriarProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produto = new Produto();
        $produto->nome_produto = "Produto teste";
        $produto->id_categoria = 1;
        $produto->save();

        /**
         * fazer a mesma ação das linha acima através de um array associativo
         * Produto::create([
         * "nome_produto" => "Produto teste 2",
         * "id_categoria" => 2
         * ]);
         */
        
     
    }
}
