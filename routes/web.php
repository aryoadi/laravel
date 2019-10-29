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
    // return view('welcome');
    $blog = App\Blog::all();
    return view('home',['blog'=>$blog]);
});

// Route::get('/admin', 'BlogController');

Auth::routes();

Route::resource('/admin','BlogController');

Route::get('/show/{id}','BlogController@show')->name('details');

Route::get('/destroy/{id}','BlogController@destroy')->name('destroy');

Route::get('/edit/{id}','BlogController@edit')->name('edit');

Route::post('/update/{id}','BlogController@update')->name('update');

Route::get('/home', 'HomeController@index')->name('home');
