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
    return view('welcome');
});

Route::get('index',[
	'as'=>'trangchu',
	'uses' => 'PageController@getIndex'
]);
Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he', [
	'as' => 'lienhe',
	'uses' => 'PageController@getLienHe'
]);

Route::get('gioi-thieu', [
	'as' => 'gioithieu',
	'uses' => 'PageController@getGioiThieu'
]);
Route::get('add-to-cart/{id}', [
	'as' => 'themgiohang',
	'uses' => 'PageController@getAddtoCart'
]);
Route::get('del-cart/{id}', [
	'as' => 'xoagiohang',
	'uses' => 'PageController@getDelItemtCart'
]);
Route::get('dat-hang', [
	'as' => 'dathang',
	'uses' => 'PageController@getCheckout'
]);
Route::post('dat-hang', [
	'as' => 'dathang',
	'uses' => 'PageController@postCheckout'
]);
Route::get('dang-nhap', [
	'as' => 'login',
	'uses' => 'PageController@getLogin'
]);
Route::post('dang-nhap', [
	'as' => 'login',
	'uses' => 'PageController@postLogin'
]);
Route::get('dang-ky', [
	'as' => 'signin',
	'uses' => 'PageController@getSignin'
]);
Route::post('dang-ky', [
	'as' => 'signin',
	'uses' => 'PageController@postSignin'
]);
Route::get('dang-xuat', [
	'as' => 'logout',
	'uses' => 'PageController@getLogout'
]);
Route::get('search', [
	'as' => 'search',
	'uses' => 'PageController@getSearch'
]);


// admin
Route::get('/admin','AdminController@index');
// Route::get('/adminhome', 'AdminController@adminhome');
Route::get('admin_home', ['as' => 'admin_home', 'uses' => 'AdminController@admin_home']);
Route::post('admin_login', ['as' => 'login', 'uses' => 'AdminController@admin_login']);