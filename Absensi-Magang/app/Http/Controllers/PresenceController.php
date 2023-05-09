<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DateTimeZone;

use App\Models\User;
use App\Models\Presence;
use DateTime;

class PresenceController extends Controller
{
    public function presence()
    {
        $user = Auth::user();

        return view('user.presence', compact('user'));
    }

    public function addPresence(Request $req)
    {
        $timezone = 'Asia/Jakarta';
        $date_time = new DateTime('now', new DateTimeZone($timezone));
        $date = $date_time->format('Y-m-d');
        $local_time = $date_time->format('H:i:s');

        $presence = Presence::where([
            ['user_id', '=', Auth::id()],
            ['created_at', '!=', 'null']
        ])->first();

        if (!$presence) {
            $presence = new Presence();

            $presence->user_id = Auth::user()->id;
            $presence->status = $req->status;
            $presence->ip_address = request()->getClientIp(true);
            $presence->check_in = $local_time;

            $presence->save();
        } else
            dd('Presensi sudah ada');

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

        $presence = User::join('presences', 'users.id', '=', 'presences.user_id')
            ->get(['presences.*', 'users.name']);

        return view('admin.presences', compact('title', 'presence'));
    }
}
