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

//landing
Route::get('/', function () {
    return view('landing');
});

//login
Route::post('/user/registration', 'UserController@login');

//Register
Route::post('/user/registration', 'UserController@store');

//admin view
Route::get('/admins', 'UserController@index' );


Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});





Route::get('/layouts/admin', function () {
    return view('layouts.admin');
});



Route::get('/create/user', function () {
    return view('admin.users.create.user');
});

Route::get('/create/job', function () {
    return view('admin.jobs.create.job');
});


Route::get('/jobs', function () {
    return view('admin.jobs.view.jobs');
});

Route::get('/posting', function () {
    return view('admin.jobs.view.posted');
});

Route::get('/create/training', function () {
    return view('admin.trainings.create.training');
});

Route::get('/create/schedule', function () {
    return view('admin.transport.create.transport');
});

Route::get('/schedule', function () {
    return view('admin.transport.views.transports');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/dashboard/{id}', 'UserController@dashboard');

Route::post('/training/enroll/{$id}', 'TrainingController@enroll');

//click to view the job details

