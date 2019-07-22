<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listarTodos(Request $request){
        $produtos = new Produto();
        $listarProdutos = $produtos->all();
        //$listarProdutos = Produto::all();

        return view('produtos',['produtos'=>$listarProdutos]);
    }
}
