<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PresenceController;
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

Route::get('/rekap', [PresenceController::class, 'index']);

Route::get('/settings', function () {
    return view('user.settings', [
        "title" => "settings"
    ]);
});

Route::get('/presence', function () {
    return view('user.presence');
})->middleware('auth');

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

Route::get('login', [AuthController::class, 'login'])->name('login'); 
Route::post('postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('/register->user', [AuthController::class, 'create'])->name('create_user');