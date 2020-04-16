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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Backoffice')
    ->prefix('/backoffice')
    ->name('backoffice.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/products', 'ProductsController@index')
            ->name('products.list');
        Route::get('/products/create', 'ProductsController@create')
            ->name('products.create');
        Route::post('/products/create', 'ProductsController@store')
            ->name('products.store');
    });











