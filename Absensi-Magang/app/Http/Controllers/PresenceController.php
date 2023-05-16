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

    public function checkPresence(Request $req)
    {
        $timezone = 'Asia/Jakarta';
        $date_time = new DateTime('now', new DateTimeZone($timezone));
        $date = $date_time->format('Y-m-d');
        $time = $date_time->format('H:i:s');

        $presence = Presence::where([
            ['user_id', '=', Auth::id()],
            ['created_at', '!=', 'null'], 
            ['date', '=', $date]
        ])->first();

        if (!$presence) {
            $presence = new Presence();

            $presence->user_id = Auth::user()->id;
            $presence->status = $req->status;
            $presence->ip_address = request()->getClientIp(true);
            $presence->check_in = $time;
            $presence->date = $date;

            $presence->save();

            return Redirect::route('home');
        } elseif ($presence->check_out == '') {
            $presence->update([
                $presence->check_out = $time
            ]);

            return Redirect::route('login');
        } else
            return Redirect::route('home');
    }

    public function recapPresence()
    {
        $title = "recap";

        $user = Auth::user();
        $presence = Presence::where('user_id', $user->id)->get();

        return view('user.recap', compact('title', 'user', 'presence'));
    }

    public function lastPresence()
    {
        $timezone = 'Asia/Jakarta';
        $date_time = new DateTime('now', new DateTimeZone($timezone));
        $time = $date_time->format('H:i:s');

        $presence = Presence::where([
            ['user_id', '=', Auth::id()],
            ['date', '!=', 'null']
        ])->first();

        $last_presence = $presence;

        $last_presence->update([
            $last_presence->check_out = $time
        ]);

        return Redirect::route('login');
    }

    public function showPresences()
    {
        $title = "presences";

        $presence = User::join('presences', 'users.id', '=', 'presences.user_id')
            ->get(['presences.*', 'users.name']);

        return view('admin.presences', compact('title', 'presence'));
    }
}
