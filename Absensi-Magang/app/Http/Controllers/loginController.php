<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class loginController extends Controller
{
    //
    public function login(){
        //dd('login page');
        return view('login');
    }
    public function register(){
        //dd('login page');
        return view('register');
    }
    public function create(Request $request){
        //dd($request->all());
        
        $user = new User();
        /*if($request->cofirm != $request->password){
            return redirect('register')->with('error','Both password are not matched!');
        }*/
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect('register')->with('success','Registered Successfully');
    }
    public function postlogin(Request $request){
        //dd($request->all());
        $data = ['email'=>$request->input('email'),'password'=>$request->input('password')];
        if (Auth::attempt($data)){
            if (Auth::attempt($data)){
                return redirect('admin');
            }
            return redirect('home');
        }
        return redirect('login');
    }
}
