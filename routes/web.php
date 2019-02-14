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

//Auth
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

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
Route::get('/form', 'FileController@dsp');

Route::prefix('admin')->group(function () 
{
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('register', 'AdminController@create')->name('admin.register');
    Route::post('register', 'AdminController@store')->name('admin.register.store');
    Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');
    Route::get('/peserta', 'Admin\PesertaController@index')->name('admin.peserta');
    Route::get('/jersey', 'Admin\JerseyController@index');
    Route::get('/detailpeserta/{id}', 'Admin\DetailPesertaController@index')->name('admin.detailpeserta');
    Route::post('/tambahtim', 'Admin\PesertaController@create')->name('admin.peserta.tambah');
    Route::post('/deletetim/{id}', 'Admin\PesertaController@delete')->name('admin.peserta.delete');
    Route::get('/downloadberkas/{id}', 'Admin\PesertaController@downloadfile')->name('file.downloadadmin');
    Route::get('/downloadpemain', 'Admin\PesertaController@export')->name('file.downloadpemain');
    Route::get('/downloadjersey', 'Admin\JerseyController@download');
    Route::get('/viewdsp/{id}', 'Admin\DSPController@index');
    Route::get('/viewdsp', 'Admin\DSPController@total');
    Route::get('/downloaddetailpemain/{id}', 'Admin\DetailPesertaController@download');
});