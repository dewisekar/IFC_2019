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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/pemain', 'PemainController@add')->name('pemain.add');
Route::post('/official', 'OfficialController@add')->name('official.add');
Route::post('/upload', 'FileController@add')->name('file.add');
Route::post('/editpemain/{id}', 'PemainController@edit')->name('pemain.edit');
Route::post('/editofficial/{id}', 'OfficialController@edit')->name('official.edit');
Route::post('/deletepemain/{id}', 'PemainController@delete')->name('delete.pemain');
Route::post('/deleteofficial/{id}', 'OfficialController@delete')->name('delete.official');

Route::prefix('admin')->group(function () 
{
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('register', 'AdminController@create')->name('admin.register');
    Route::post('register', 'AdminController@store')->name('admin.register.store');
    Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');
});