<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {

        $html  = "<h1>Listagem de Produtos</h1>";
        $produtos = DB::select("select * from produtos");
        foreach ($produtos as $produto) {
            $html .= "<br>Nome:" . $produto->nome . " - Descrição: " . $produto->descricao;
        }
        return $html;
    }
}