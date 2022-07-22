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

Route::get('/contacto', function () {
    return view('contacto');
});



Route::get('/products', 'ProductController@index')->name('paginas.index');

Route::get('/products/create', 'ProductController@create')->name('paginas.create');

Route::post('/products', 'ProductController@store')->name('paginas.store');

Route::get('/products/{id}', 'ProductController@show')->name('paginas.show');

Route::get('/products/{id}/edit', 'ProductController@edit')->name('paginas.edit');

Route::put('/products/{id}', 'ProductController@update')->name('paginas.update');

Route::delete('/products/{id}', 'ProductController@destroy')->name('paginas.destroy');