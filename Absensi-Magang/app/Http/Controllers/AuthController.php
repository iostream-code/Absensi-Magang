<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function actionLogin(Request $req)
    {
        $data = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'student')
                return Redirect::route('presence');
            else
                return Redirect::route('admin');
        } else
            return Redirect::route('login');
    }

    public function register()
    {
        return view('register');
    }

    public function createUser(Request $req)
    {
        $user = new User();

        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->role = $req->role;
        $user->save();

        return Redirect::route('login');
    }
}
