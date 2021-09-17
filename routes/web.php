<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\MainController;
// use App\Http\Controllers\ManagerController;
// use App\Http\Controllers\UsersController;


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
    return view('index');
});

Route::prefix('/product')->group(function () {
    Route::get('/list', 'CategoryController@index')->name('departments.index')->middleware('auth');
    Route::get('/Edit/{id}', 'CategoryController@edit')->name('departments.departmentsEdit');
    Route::post('/Update/{id}', 'CategoryController@update')->name('departments.update');
    Route::post('/store', 'CategoryController@store')->name('departments.store');
    Route::get('/create', 'CategoryController@create')->name('departments.create');
    Route::get('/destroy/{id}', 'CategoryController@destroy')->name('departments.destroy');
});
Route::prefix('/category')->group(function () {
    Route::get('/list', 'MainController@index')->name('categories.index')->middleware('auth');
    Route::get('/edit/{id}', 'MainController@edit')->name('categories.edit');
    Route::post('/update/{id}', 'MainController@update')->name('categories.update');
    Route::post('/store', 'MainController@store')->name('categories.store');
    Route::get('/create', 'MainController@create')->name('categories.create');
    Route::get('/destroy/{id}', 'MainController@destroy')->name('categories.destroy');
});
Route::prefix('/manager')->group(function () {
    Route::get('/list', 'ManagerController@index')->name('managers.index')->middleware('auth');
    Route::get('/edit/{id}', 'ManagerController@edit')->name('managers.edit');
    Route::post('/update/{id}', 'ManagerController@update')->name('managers.update');
    Route::post('/store', 'ManagerController@store')->name('managers.store');
    Route::get('/create', 'ManagerController@create')->name('managers.create');
    Route::get('/destroy/{id}', 'ManagerController@destroy')->name('managers.destroy');
});
Route::prefix('/user')->group(function () {
    Route::get('/list', 'UsersController@index')->name('users.index')->middleware('auth');
    Route::get('/edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::post('/update/{id}', 'UsersController@update')->name('users.update');
    Route::post('/store', 'UsersController@store')->name('users.store');
    Route::get('/create', 'UsersController@create')->name('users.create');
    Route::get('/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
    Route::get('/{id}', 'UsersController@show')->name('users.show');
});
Route::prefix('/order')->group(function () {
    Route::get('/list', 'OrderController@index')->name('order.index')->middleware('auth');
    Route::get('/destroy/{id}', 'OrderController@destroy')->name('order.destroy');
    Route::get('/edit/{id}', 'OrderController@edit')->name('order.edit');
    Route::post('/edit/{id}', 'OrderController@update')->name('order.update');
});
Route::prefix('/login')->group(function () {
    Route::get('/list', 'LoginController@index')->name('login.index')->middleware('auth');
    Route::get('/edit/{id}', 'LoginController@edit')->name('login.edit');
    Route::post('/update/{id}', 'LoginController@update')->name('login.update');
    Route::post('/store', 'LoginController@store')->name('login.store');
    Route::get('/create', 'LoginController@create')->name('login.create');
    Route::get('/destroy/{id}', 'LoginController@destroy')->name('login.destroy');
});
Route::prefix('/stock')->group(function () {
    Route::get('/list', 'StockController@index')->name('stock.index')->middleware('auth');
    Route::get('/edit/{id}', 'StockController@edit')->name('stock.edit');
    Route::post('/update/{id}', 'StockController@update')->name('stock.update');
    Route::post('/store', 'StockController@store')->name('stock.store');
    Route::get('/create', 'StockController@create')->name('stock.create');
    Route::get('/destroy/{id}', 'StockController@destroy')->name('stock.destroy');
});
Route::prefix('/broadcast')->group(function () {
    Route::get('/list', 'BroadcastController@index')->name('broadcast.index')->middleware('auth');
    Route::get('/edit/{id}', 'BroadcastController@edit')->name('broadcast.edit');
    Route::post('/update/{id}', 'BroadcastController@update')->name('broadcast.update');
    Route::post('/store', 'BroadcastController@store')->name('broadcast.store');
    Route::get('/create', 'BroadcastController@create')->name('broadcast.create');
    Route::get('/destroy/{id}', 'BroadcastController@destroy')->name('broadcast.destroy');
});


Route::get('login', 'Auth\LoginController@loginView')->middleware('guest')->name('login');
Route::post('login-post', 'Auth\LoginController@loginPost')->middleware('guest')->name('login-post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('product/photo/edit/{id}', 'CategoryController@editPhoto');
Route::post('product/photo/edit/{id}', 'CategoryController@updatePhoto');

Route::get('orders/export/', 'OrderController@export');
