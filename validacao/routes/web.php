<?php

use Illuminate\Support\Facades\Route;

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

//retornando view de novos clientes
Route::get('/novocliente', 'ClienteControlador@create');

//retornando index
Route::get('/', 'ClienteControlador@index');

Route::post('/cliente', 'ClienteControlador@store');