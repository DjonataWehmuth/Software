<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Tecnologia/TabelaComplementar/{tabela}', 'TabelaController@Complementar')->name('complementar');

Route::prefix('cadastros')->group(function () {
  Route::prefix('pessoas')->group(function () {
    Route::get('/',               'PessoaController@index')->name('pessoas');
    Route::get('/nova',           'PessoaController@create')->name('nova_pessoa');
    Route::get('/consultar/{id}', 'PessoaController@show')->name('consultar_pessoa');

    Route::post('/alterar', 'PessoaController@update')->name('update_pessoa');
    Route::post('/excluir', 'PessoaController@destroy')->name('excluir_pessoa');
    Route::post('/inserir', 'PessoaController@store')->name('inserir_pessoa');

    Route::post('/atualizar', 'PessoaController@AtualizarSituacao')->name('situacao_pessoa');
  });
});
