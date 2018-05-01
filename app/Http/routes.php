<?php
Route::get('/', function () {
    return view('welcome');
});

// funcao para retornar todos os produtos
Route::get('/produtos', 'ProdutoController@lista');


// configuracao para pegar uma url ao clicar em um produto.
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');

/**
 * rota para criar um novo produto
 */
Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');


Route::get('/produtos.json', 'ProdutoController@listaJson');
