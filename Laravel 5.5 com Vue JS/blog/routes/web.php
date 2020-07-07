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

// OBS: Todos os nomes de rotas de acordo com o Resource Controllers eu encontro no link: 
// https://laravel.com/docs/5.5/controllers#resource-controllers

//DEFININDO GRUPO DE ROTAS
// O atributo "namespace" serve para eu não precisar colocar 
// o caminho "/Admin/" nas minhas rotas e o "prefix" serve para
// sinalizar que a rota se trata da administração. Já o "middleware",
// serve para proteger as minhas rotas
Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('artigos', 'ArtigosController');
});