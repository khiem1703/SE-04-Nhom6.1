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

Route::get('san-pham', [
	'as' => 'sanpham',
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
Route::get('/admin_login','AdminController@getAdminLogin');
Route::get('/admin_home', ['as' => 'admin_home', 'uses' => 'AdminController@admin_home']);
Route::post('/admin_login', ['as' => 'login', 'uses' => 'AdminController@postAdminLogin']);
Route::post('/logout', ['as' => 'logout', 'uses' => 'AdminController@logout']);

Route::get('/add-category-product', ['as' => 'add-category-product', 'uses' => 'CategoryProduct@add_category_product']);
Route::get('/all-category-product', ['as' => 'all-category-product', 'uses' => 'CategoryProduct@all_category_product']);
Route::post('/save-category-product', ['as' => 'save-category-product', 'uses' => 'CategoryProduct@save_category_product']);

// Route::get('upda-category/{id}', [
// 	'as' => 'upda-category',
// 	'uses' => 'CategoryProduct@get_update_category'
// ]);
Route::get('upda-category', 'CategoryProduct@get_update_category')->name('update-category');
Route::post('upda-category', [
	'as' => 'upda-category',
	'uses' => 'CategoryProduct@post_update_category'
]);

//Route::post('/upda-category/{id}', 'CategoryProduct@post_update_category');

