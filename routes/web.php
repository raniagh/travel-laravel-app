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
    return view('accueil');
});
Route::get('/merci', function () {
    return view('tours.valide');
});
Route::get('/admin', function () {
    return view('admin/base');
});
Route::get('/hi', function () {
    return view('layout');
});
Auth::routes();
Route::get('/hotels', 'User\HotelController@index')->name('hotel');
Route::get('/tours', 'User\TourController@index')->name('tour');
Route::get('/vols', 'User\VolController@index')->name('vol');
Route::get('/voitures', 'User\VoitureController@index')->name('voiture');
Route::get('/croisieres', 'User\CroisiereController@index')->name('croisiere');
Route::get('/rechercheTours', 'User\TourController@Recherche')->name('recherchet');



Route::get('/tour/{idt}', [
    'uses' => 'User\TourController@show',
    'as' => 'tours.show',
]);
Route::get('/tour/reserve/{idt}', [
    'uses' => 'User\TourController@reserve',
    'as' => 'tours.reserve',
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/confirmer/{idt}', [
    'uses' => 'User\TourController@confirme',
    'as' => 'confirmer',
]);

Route::get('/payer/{idt}', [
    'uses' => 'User\TourController@checkout',
    'as' => 'payer',
]);

Auth::routes();

Route::post('/register_user','User\TourController@create');