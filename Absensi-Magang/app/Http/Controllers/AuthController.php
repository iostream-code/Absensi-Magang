<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use DateTimeZone;

use App\Models\User;
use App\Models\Presence;
use DateTime;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function actionLogin(Request $req)
    {
        $timezone = 'Asia/Jakarta';
        $date_time = new DateTime('now', new DateTimeZone($timezone));
        $date = $date_time->format('Y-m-d');

        $data = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        $presence = Presence::where('user_id', '=', Auth::id())->first();

        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'student') {
                if ($presence->check_out ?? '')
                    return Redirect::route('home');
                else
                    return Redirect::route('presence');
            } else
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

    public function logOut()
    {
        $presence = Presence::where('user_id', '=', Auth::id())->first();

        if ($presence->check_out != '') {
            Auth::logout();

            return Redirect::route('login');
        } else
            return Redirect::route('presence');
    }
}
