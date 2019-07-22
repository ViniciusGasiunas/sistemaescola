<?php
//para criar esse arquivo foi criado atraves de: php artisan make:factory ProdutoFactory
/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        "nome_produto" => $faker->name,
        "id_categoria" => $faker->randomDigit //gera um digito aleatório de 0-9
    ];
});
