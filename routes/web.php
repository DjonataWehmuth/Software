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

  Route::prefix('tipos')->group(function () {
    Route::get('/',               'TipoController@index')->name('tipos');
    Route::get('/novo',           'TipoController@create')->name('novo_tipo');
    Route::get('/consultar/{id}', 'TipoController@show')->name('consultar_tipo');

    Route::post('/alterar', 'TipoController@update')->name('update_tipo');
    Route::post('/excluir', 'TipoController@destroy')->name('excluir_tipo');
    Route::post('/inserir', 'TipoController@store')->name('inserir_tipo');

    Route::post('/atualizar', 'TipoController@AtualizarSituacao')->name('situacao_tipo');
  });

});

Route::prefix('projetos')->group(function () {
  Route::prefix('obras')->group(function () {
    Route::get('/',               'ObraController@index')->name('obras');
    Route::get('/nova',           'ObraController@create')->name('nova_obra');
    Route::get('/consultar/{id}', 'ObraController@show')->name('consultar_obra');

    Route::post('/alterar', 'ObraController@update')->name('update_obra');
    Route::post('/excluir', 'ObraController@destroy')->name('excluir_obra');
    Route::post('/inserir', 'ObraController@store')->name('inserir_obra');

    Route::post('/atualizar', 'ObraController@AtualizarSituacao')->name('situacao_obra');

    Route::prefix('funcionarios')->group(function () {
      Route::get('/',               'ObraFuncionarioController@index')->name('funcionarios');
      Route::get('/novo',           'ObraFuncionarioController@create')->name('novo_funcionario');
      Route::get('/consultar/{id}', 'ObraFuncionarioController@show')->name('consultar_funcionario');
  
      Route::post('/alterar', 'ObraFuncionarioController@update')->name('update_funcionario');
      Route::post('/excluir', 'ObraFuncionarioController@destroy')->name('excluir_funcionario');
      Route::post('/inserir', 'ObraFuncionarioController@store')->name('inserir_funcionario');
  
      Route::post('/atualizar', 'ObraFuncionarioController@AtualizarSituacao')->name('situacao_funcionario');
    });
  });
});
