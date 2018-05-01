<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


/**
 *
 * Responsavel por trazer os dados dos produtos.
 * Class ProdutoController
 * @package App\Http\Controllers
 */
class ProdutoController extends Controller
{
    /**
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
        return view('produto/listagem')->with('produtos', $produtos);
    }


    /**
     *
     * Funcao para retornar um produto por id.
     *é passado um with, com parametros que vai ser recuperado e a variavel para aparecer.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mostra()
    {
        $id = Request::route('id');
        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        return view('produto.detalhe')->with('produto', $resposta[0]);
    }

    /**
     *
     * chama o formulario novo produto.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function novo()
    {
        return view('formulario');
    }


    /**
     *
     * Funcao para adicionar produto,
     * nao estamos passando nada por parametro ate o momento.
     *
     *
     * no form, estamos passando um csrf_token, para evitar o sql injection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adiciona()
    {

        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');

        DB::insert('insert into produtos(nome, valor, descricao, quantidade) 
        values (?,?,?,?)', array($nome, $valor, $descricao, $quantidade));
        return view('adicionado')->with('nome', 'Frigobar');
    }
}