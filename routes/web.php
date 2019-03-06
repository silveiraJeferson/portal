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


Route::resource('/loto', 'Loto\LotoController');
Route::resource('/loteria', 'Loto\LoteriaController');
Route::resource('/sorteio', 'SorteioController');
Route::resource('/painel', 'PainelController');

//----------------------------------------------------------------gestao
Route::resource('/gestao', 'GestaoController');
Route::resource('/contas', 'ContasController');










Route::get('/', function () {
    return view('portal.partes.main.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
