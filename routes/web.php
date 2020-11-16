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

Route::get('/', function () {
    return view('master');
});

// Route::get('/index',[
//     'as'=>'trang-chu',
//     'uses'=>'PageController@getIndex()'
// ]);
Route::get('index', function () {
    return view('master');
});