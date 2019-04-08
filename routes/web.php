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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Socialites

Route::get('auth/facebook', ['as'=>'facebook' , 'uses'=> 'Auth\LoginController@redirectToFacebookProvider'] );
 
Route::get('auth/facebook/callback', ['as'=>'facebook/callback','uses'=>'Auth\LoginController@handleProviderFacebookCallback']);

// google
Route::resource('events','EventController'); 
Route::get('/events', 'EventController@index')->name('events');
