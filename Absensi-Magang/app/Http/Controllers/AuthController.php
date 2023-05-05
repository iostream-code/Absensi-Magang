<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;

class AuthController extends Controller
{
    public function auth()
    {
        return view('login');
    }

    public function authUser(Request $req)
    {
        $data = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if (Auth::attempt($data)) {
            $role = Auth::user()->role;

            if (Auth::attempt($role == 'admin'))
                return Redirect::route('admin');
            else
                return Redirect::route('presence');
        } else
            return Redirect::route('auth');
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

        return Redirect::route('auth');
    }
}
