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

    Route::group(['prefix' => "/categorys"], function() {
    Route::get('/index', "CategorysController@index")->name("categorys");
    Route::get('/add', "CategorysController@create")->name("categorysAdd");
    Route::get('/edit/{id}', "CategorysController@editHoliday")->name("categorysEdit");
    Route::post('/store', "CategorysController@store")->name("categorysStore");
    Route::post('/update', "CategorysController@update")->name("categorysUpdate");
    Route::get('/detail/{id}', "CategorysController@detail")->name("categorysDetail");
    Route::get('/delete/{id}', "CategorysController@delete")->name("categorysDelete");
});

    Route::group(['prefix' => "/brands"], function() {
    Route::get('/index', "BrandsController@index")->name("brands");
    Route::get('/add', "BrandsController@create")->name("brandsAdd");
    Route::get('/edit/{id}', "BrandsController@editHoliday")->name("brandsEdit");
    Route::post('/store', "BrandsController@store")->name("brandsStore");
    Route::post('/update', "BrandsController@update")->name("brandsUpdate");
    Route::get('/detail/{id}', "BrandsController@detail")->name("brandsDetail");
    Route::get('/delete/{id}', "BrandsController@delete")->name("brandsDelete");
});


