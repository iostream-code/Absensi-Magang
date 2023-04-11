<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        dd($request);

        if (Auth::Attempt($data)) {
            return redirect('home');
        } else {
            return redirect('/');
        }
    }

    // public function actionlogin(Request $request)
    // {
    //     $request->validate(
    //         [
    //             'username' => 'required',
    //             'password' => 'required'
    //         ],
    //         [
    //             'username.required' => 'Username salah',
    //             'password.required' => 'Password salah'
    //         ]
    //     );

    //     $data = [
    //         'username' => $request->username,
    //         'password' => $request->password,
    //     ];

    // }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
