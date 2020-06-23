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

// Route::get('/', function () {
//     //return view('welcome');
//     return 'hello world';
// });

Route::get('/youtube', function () {
    //return view('welcome');
    return view('pages.youtube.home');
});


Route::get('/khanqah', function () {
    //return view('welcome');
    return view('pages.khanqah');
});
 

Route::get('/contact', function () {
    //return view('welcome');
    return view('pages.contactus');
});

Route::get('/', 'PagesController@index');

Route::resource('articles', 'ArticlesController');
Auth::routes();

Route::resource('audio', 'AudioController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
