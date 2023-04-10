<?php

use App\Http\Controllers\UserController;
<<<<<<< HEAD
use App\Http\Controllers\loginController;
=======
use App\Http\Controllers\LoginController;
>>>>>>> 38160db (Adding login controller)
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

//USER

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', function () {
    return view('user.home', [
        "title" => "home"
    ]);
})->middleware('auth');

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

<<<<<<< HEAD
Route::get('/presence', function () {
    return view('user.presence');
});

//admin
=======
//ADMIN
>>>>>>> 38160db (Adding login controller)

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

