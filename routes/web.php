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


Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'WelcomeController@welcome')->name('welcome');
   
});
    

Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'WelcomeController@index')->name('index');
});    

Route::group(['prefix' => "/products"], function() {
    Route::get('/index', "ProductsController@index")->name("products");
    Route::get('/add', "ProductsController@create")->name("productsAdd");
    Route::get('/edit/{id}', "ProductsController@editHoliday")->name("productsEdit");
    Route::post('/store', "ProductsController@store")->name("productsStore");
    Route::post('/update', "ProductsController@update")->name("productsUpdate");
    Route::get('/detail/{id}', "ProductsController@detail")->name("productsDetail");
    Route::get('/delete/{id}', "ProductsController@delete")->name("productsDelete");
});
