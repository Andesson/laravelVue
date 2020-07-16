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

// Route::get('/{vue_capture?}', function () {
//     return view('initial');
// })->where('vue_capture', '[\/\w\.-]*');

App::setLocale(substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2));

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('index');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
