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
    return view('app');
});

Route::get('pessoas','PessoaController@index');

Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('','ProdutoController@index');
    Route::get('create','ProdutoController@create');
    Route::get('{id}/delete','ProdutoController@delete');
    Route::get('{id}/edit','ProdutoController@edit');

    Route::put('{id}/update','ProdutoController@update');

    Route::post('store','ProdutoController@store');
});