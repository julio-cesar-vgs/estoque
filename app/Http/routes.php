<?php

Route::get('/', 'ProdutoController@listaTudo');

// funcao para retornar todos os produtos
Route::get('/produtos', ['middleware' => 'auth', 'uses' => 'ProdutoController@listaTudo']);
// configuracao para pegar uma url ao clicar em um produto.
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostraProdutoPorID');
//rota para criar um novo produto
Route::get('/produtos/novo', 'ProdutoController@novo');
// quando acionado esta rota, sera dado um request para adicionar produto
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
// quando invocado este metodo retorna uma lista de json
Route::get('/produtos.json', 'ProdutoController@listaJson');
//rota para remover um produto por id
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');



Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
]);