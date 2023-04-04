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

//user

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('user.home', [
        "title" => "home"
    ]);
});

Route::get('/rekap', function () {
    return view('user.rekap', [
        "title" => "rekap"
    ]);
});

Route::get('/settings', function () {
    return view('user.settings', [
        "title" => "settings"
    ]);
});

//admin

Route::get('/admin', function () {
    return view('admin.admin', [
        "title" => "admin"
    ]);
});

Route::get('admin/user/mahasiswa', function () {
    return view('admin.mahasiswa', [
        "title" => "mahasiswa"
    ]);
});