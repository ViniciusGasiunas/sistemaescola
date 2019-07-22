<?php

use Illuminate\Database\Seeder;
use App\Produto;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() //executa as classes
    {
        // $this->call(UsersTableSeeder::class); "::class" indica que o nome(UsersTableSeeder) antes é uma classe
        $this->call(CriarProdutoSeeder::class); 
        factory(Produto::class, 50)->create(); //factory(criar objeto, quantidade)
        
    }
}
