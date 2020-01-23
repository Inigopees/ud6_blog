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

Route::get('/','BlogController@index')->name('/');

Auth::routes();

Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::get('/Registro',function(){
    return view('auth.register');
})->name('Registro');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/Post/{id}','PostController@update')->name('update');

Route::get('/Post/delete/{id}','PostController@destroy')->name('delete');

Route::Resource('/Post','PostController');


