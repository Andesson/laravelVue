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

//App::setLocale(substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2));
Auth::routes();

Route::group(['middleware' => ['auth']], function () {


    Route::get('/', function () {
         return view('index');
    });

    // Route::get('/adm/{vue_capture?}', function () {
    //     return view('index');
    // })->where('vue_capture', '[\/\w\.-]*');

   // Route::resource('produto', 'ProdutoController');

    Route::any('{slug}', function () {
          return view('index');
    });
});



