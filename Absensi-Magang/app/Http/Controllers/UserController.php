<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/user');
    }

    public function edit($id)
    {
        $data = User::find($id);
        $title = 'edit';

        return view('admin.edit', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->update($request->all());

        return redirect('/admin/user');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/user');
    }
}
