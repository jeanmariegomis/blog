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

Route::get('/','Auth\LoginController@showLoginForm')->name('welcome');




Route::get('charts', 'ChartController@index');




Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('categorie','CategorieController');
    Route::resource('produit','ProduitController');
    Route::resource('produit-chart','ProduitController');
    Route::resource('fournisseur','FournisseurController');
    Route::resource('entreestock','EntreeStockController');
    Route::resource('client','ClientController');
    Route::resource('commande','CommandeController');





});