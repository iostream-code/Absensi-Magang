<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PresenceController;

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

// Authentication User Route

Route::get('/', [AuthController::class, 'auth'])->name('auth');
Route::post('/login', [AuthController::class], 'authUser')->name('auth_user');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'createUser'])->name('create_user');

//Presences Route

Route::get('/presence', [PresenceController::class, 'presences'])->name('presence');
Route::post('/getpresence', [PresenceController::class, 'getpresence'])->name('getpresence');

//Admin Route

Route::get('/admin', function () {
    return view('admin.admin', [
        "title" => "admin"
    ]);
})->middleware('auth')->name('admin');

Route::get('admin/user', [UserController::class, 'index']);
Route::get('admin/user/create', [UserController::class, 'create']);
Route::post('/insert', [UserController::class, 'insert']);
Route::get('admin/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/update/{id}', [UserController::class, 'update']);
Route::get('admin/user/delete/{id}', [UserController::class, 'delete']);
Route::get('/riwayat', [PresenceController::class, 'getHistory']);
