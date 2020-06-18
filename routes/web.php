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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/config', 'configController@config')->name('configApp')->middleware('verified');
Route::post('/config', 'configController@config');
Route::get('/newProduct','productController@add_product')->name('configProduit')->middleware('verified');
Route::post('/newProduct','productController@add_product');
Route::get('/newApp', 'configController@application')->name('configApp');
Route::post('/newApp', 'configController@application');
Route::get('Info', 'configController@info')->name('configInfo');
Route::post('Info', 'configController@info');
 // route application
Route::get('/delete/{id}','applicationController@suppression'); 

// route note
Route::get('/newNote','noteController@add_newNote')->name('configNote');
Route::post('/newNote','noteController@add_newNote');
Route::get('/suppNote/{id}','noteController@delete');
//route produit
Route::get('/suppProd/{id}','productController@delete');
Route::post('/addProduct','productController@addproduct');
Route::get('/addProduct','productController@addproduct')->name('configProduit');
Route::get('/produit', 'productController@index')->name('produit');
Route::post('/produit','productController@index');

Route::get('users', 'chartController@index');