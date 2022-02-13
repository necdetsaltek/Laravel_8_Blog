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


Route::get('/lrv', function () {return view('welcome');});

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/contact', 'PagesController@contact');
*/

@include('home/route_inc_file.php');
    
Route::get('/', 'PagesController@index');

Route::resource('posts', PostsController::class);