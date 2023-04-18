<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
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

Route::get('admin/user', [UserController::class, 'index']);
Route::get('admin/user/create', [UserController::class, 'create']);
Route::post('/insert', [UserController::class, 'insert']);
Route::get('admin/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/update/{id}', [UserController::class, 'update']);
Route::get('admin/user/delete/{id}', [UserController::class, 'delete']);

Route::get('login', [loginController::class, 'login']);
Route::post('postlogin', [loginController::class, 'postlogin'])->name('postlogin');
Route::get('register', [loginController::class, 'register']);
Route::post('/register->user', [loginController::class, 'create'])->name('create_user');

Route::get('admin', function() {return view('admin'); })->middleware('checkRole:admin');
Route::get('students', function() {return view('home'); })->middleware('checkRole:students');

