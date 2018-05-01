<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// funcao para retornar todos os produtos
Route::get('/produtos','ProdutoController@lista');


// configuracao para pegar uma url ao clicar em um produto.
Route::get('/produtos/mostra/{id}','ProdutoController@mostra');