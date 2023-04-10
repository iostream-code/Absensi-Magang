<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        // return view('login');
        if (Auth::check()) {
            // dd('Minimal berhasil');
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        // $data = $request->only('email', 'password');

        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        $data = User::all();

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            return redirect('home');
        } else {
            return redirect('/');
        }

        // if ((Auth::Attempt($credentials))) {
        //     $request->session()->regenerate();
        //     dd($request);
        //     return redirect()->intended('/home');
        // }

        // return back()->withErrors([
        //     'email' => 'Email salah',
        // ])->onlyInput('email');
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
