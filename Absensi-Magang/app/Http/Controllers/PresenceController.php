<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use App\Models\Presence;

class PresenceController extends Controller
{
    public function presence()
    {
        $user = Auth::user();

        return view('user.presence', compact('user'));
    }

    public function addPresence(Request $req)
    {
        $presence = new Presence();

        $presence->user_id = Auth::user()->id;
        $presence->status = $req->status;
        $presence->ip_address = request()->getClientIp(true);
        $presence->save();

        return Redirect::route('home');
    }

    // public function presence()
    // {
    //     $user = Auth::user();
    //     $presence = Presence::where('user_id', $user->id)->get();

    //     $title = "rekap";

    //     return view('user.rekap', compact('user', 'presence', 'title'));
    // }

    // public function showPresences()
    // {
    //     $data = User::all();
    //     return view('user.presence', compact('data'));
    // }

    // public function getpresence(Request $req)
    // {
    //     $presence = new Presence();

    //     $presence->user_id = Auth::user()->id;
    //     $presence->status = $req->status;
    //     $presence->ip_address = request()->getClientIp(true);
    //     $presence->save();

    //     return redirect('home');
    // }

    // public function getHistory()
    // {
    //     $user = User::all();
    //     $presence = Presence::join('users', 'presences.user_id', '=', 'users.id')
    //         ->select('users.name', 'users.email', 'users.role', 'presences.status', 'presences.ip_address', 'presences.created_at')
    //         ->get();

    //     $title = "riwayat";

    //     return view('admin.riwayat', compact('user', 'presence', 'title'));
    // }
}
