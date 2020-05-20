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

Route::get('/', function () {
    return view('welcome');
});
// Controle de CRUD
//create
Route::get('products/create','ProductController@create')->name('products.create'); //criar modelo
Route::post('products','ProductController@store')->name('products.store'); //cadastrar registro
//read
Route::get('products/{id}', 'ProductController@show')->name('products.show');//exibir por id
Route::get('products', 'ProductController@index')->name('products.index');//listar
//update
Route::get('products/{id}/edit','ProductController@edit')->name('products.edit');//editar modelo
Route::put('products/{id}/edit','ProductController@update')->name('products.update');//editar registro
//delete
routeDB::delete('products/{id', 'ProductController@destroy')->name('products.destroy');//deletar registro


