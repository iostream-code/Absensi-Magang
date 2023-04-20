<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $user = new User();
        
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect('login');
    }

    public function postlogin(Request $req)
    {
        $input = [
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ];

        if (Auth::attempt($input)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            }
            return redirect('presence');
        }

        return redirect('/');
    }
}
