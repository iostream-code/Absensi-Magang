<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresenceController extends Controller
{
    public function presences()
    {
        $data = User::all();
        return view('user.presence', compact('data'));
    }

    public function getpresence(Request $req)
    {
        $presence = new Presence();

        $presence->user_id = Auth::user()->id;
        $presence->status = $req->status;
        $presence->ip_address = request()->ip();
        $presence->save();

        return redirect('home');
    }
}
