<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        $title = 'user';

        return view('admin.user', compact('data', 'title'));
    }

    public function create()
    {
        $title = 'create';

        return view('admin.create', compact('title'));
    }

    public function insert(Request $request)
    {
        User::create($request->all());

        return redirect('/admin/user');
    }
}
