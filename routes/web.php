<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', 'ClientesController@index')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@index')->name('app.produtos');
});

//Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});