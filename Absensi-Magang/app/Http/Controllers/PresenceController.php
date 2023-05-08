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

    public function recapPresence()
    {
        $title = "recap";

        $user = Auth::user();
        $presence = Presence::where('user_id', $user->id)->get();

        return view('user.recap', compact('title', 'user', 'presence'));
    }

    public function showPresences()
    {
        $title = "presences";

        $presence = Presence::all();
        $user = User::all();

        return view('admin.presences', compact('title', 'presence', 'user'));
    }
}
