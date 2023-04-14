<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function presences()
    {
        return view('user.presence');
    }

    public function getip()
    {
        $ip = request()->ip();
        $data = Presence::create([
            'user_id' => Presence::with('users')->all()->user_id,
            "ip_address" => $ip
        ]);
        $title = "home";
        return dd($data);
        // return view('user.home', compact('data', 'title'));
    }
}
