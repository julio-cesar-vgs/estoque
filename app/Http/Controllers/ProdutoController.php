<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

/**
 *
 * Responsavel por trazer os dados dos produtos.
 * Class ProdutoController
 * @package App\Http\Controllers
 */
class ProdutoController extends Controller
{
    /**
     *
     *
     *
     *
     * Funcao para trazer os dados dos produtos
     * @return $listaProdutos
     */
    public function lista()
    {
        //forma de recuperar as informacoes do banco de dados;
        $produtos = DB::select("select * from produtos");


        // funcao view, é uma funcao chamada helper method, usado para recuperar dados, nao sendo precisa passar o final .php
        //with, necessario passar a variavel para ser disponibilizada e exibido na camada de vizualizacao.
        // logica que ajuda a retorna os dados.
        return view('listagem')->with('produtos',$produtos);
    }
}