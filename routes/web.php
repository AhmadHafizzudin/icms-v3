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
    return view('frontpage.home');
});



Route::get('/admin.home', function () {
    return view('admin.dashboard');
});

Route::get('/student.home', function () {
    return view('student.shapely.index');
});