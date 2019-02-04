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
Route::get('/gantipassword', 'GantiPasswordController@index')->name('gantipassword');
Route::post('/gantipassword', 'GantiPasswordController@ganti');
Route::post('/pemain', 'PemainController@add')->name('pemain.add');
Route::post('/official', 'OfficialController@add')->name('official.add');
Route::post('/jersey', 'JerseyController@add')->name('jersey.add');
Route::post('/editjersey/{id}', 'JerseyController@edit')->name('jersey.edit');
Route::post('/upload', 'FileController@add')->name('file.add');
Route::post('/finalisasi', 'HomeController@finalisasi');
Route::get('/downloadback/{id}', 'FileController@download')->name('file.downloadback');
Route::get('/deleteback/{id}', 'FileController@delete')->name('file.deleteback');
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