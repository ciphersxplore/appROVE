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
    return view('admin.landing');
});

Route::get('/residents', function () {
    return view('admin.users.view.residents');
});
Route::get('/employers', function () {
    return view('admin.users.view.employers');
});

Route::get('/admins', function () {
    return view('admin.users.view.admin');
});

Route::get('/create/user', function () {
    return view('admin.users.create.user');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
