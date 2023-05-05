<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'actionLogin'])->name('action_login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'createUser'])->name('create_user');

// Presences Route

Route::get('/presence', [PresenceController::class, 'presence'])->name('presence');
Route::post('/presence', [PresenceController::class, 'addPresence'])->name('add_presence');


// User Route

Route::get('/user', function() {
    return view('user.home', [
        "title" => "home"
    ]);
})->name('home');

Route::get('/user/recap', [PresenceController::class, 'recapPresence'])->name('recap_presence');

// Admin Route
        
Route::get('/admin', function () {
    return view('admin.admin', [
        "title" => "admin"
    ]);
})->name('admin');

Route::get('admin/user', [UserController::class, 'index']);
Route::get('admin/user/create', [UserController::class, 'create']);
Route::post('/insert', [UserController::class, 'insert']);
Route::get('admin/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/update/{id}', [UserController::class, 'update']);
Route::get('admin/user/delete/{id}', [UserController::class, 'delete']);
Route::get('/riwayat', [PresenceController::class, 'getHistory']);