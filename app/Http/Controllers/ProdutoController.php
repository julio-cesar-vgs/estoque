<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProdutoRequest;
use App\Produto;
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
     *
     * Contrutor responsavel por chamar o formulario de autenticacao;
     * ProdutoController constructor.
     */
    public function __construct()
    {
        $this->middleware('autorizador');
        //$this->middleware('auth', ['only' => ['adiciona', 'remove']]);
    }

    /**
     * Funcao para trazer os dados dos produtos
     * @return $listaProdutos
     */
    public function listaTudo()
    {
        //forma de recuperar as informacoes do banco de dados;
        $produtos = Produto::all();

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
    public function mostraProdutoPorID()
    {
        $id = Request::route('id');
        $produto = Produto::find($id);
        return view('produto.detalhe')->with('produto', $produto);
    }

    /**
     *
     * chama o formulario novo produto.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function novo()
    {
        return view('produto.formulario');
    }


    /**
     *
     * Funcao para adicionar produto,
     *
     *
     *
     * no form, estamos passando um csrf_token, para evitar o sql injection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adiciona(ProdutoRequest $request)
    {

        // funcao para pegar todos os nomes dos itens.
        $params = $request->all();
        //é dado um new produto e passo os parametros via construtor internet
        $Produto = new Produto($params);

        // salva o produto..
        $Produto->save();

        return redirect()
            ->action('ProdutoController@listaTudo')
            ->withInput(Request::only('nome'));
    }


    public function listaJson()
    {
        $produtos = Produto::all();
        return $produtos;
    }


    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@listaTudo');
    }
}