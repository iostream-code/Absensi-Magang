<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PresenceController extends Controller
{
    public function index()
    {
        // $data = User::with('Presences')->get();
        // $user = Auth::user()->id;
        // $proposal = Presence::where('user_id' == $user);
        // $auth_id = Auth::user();
        // $presence = DB::table('presences')->where('user_id', $auth_id)->get();
        $user = User::all();
        $presence = Presence::join('users', 'presences.user_id', '=' , 'users.id')
        ->select('users.name', 'users.email', 'users.role', 'presences.status', 'presences.ip_address', 'presences.created_at')
        ->get();
        
        $title = "rekap";

        return view('user.rekap', compact('user', 'presence', 'title'));
    }

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
        $presence->ip_address = request()->getClientIp(true);
        $presence->save();

        return redirect('home');
    }

    public function getHistory()
    {
        // $data = User::with('Presences')->get();
        // $data = User::all();
        $user = User::all();
        $presence = Presence::join('users', 'presences.user_id', '=' , 'users.id')
        ->select('users.name', 'users.email', 'users.role', 'presences.status', 'presences.ip_address', 'presences.created_at')
        ->get();
        
        $title = "riwayat";

        return view('admin.riwayat', compact('user', 'presence', 'title'));
    }
}
