<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class PresenceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $presence = Presence::where('user_id', $user->id)->get();

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
        

        $photo = $req->photo;
        if($photo) {
            list($type, $data) = explode(';', $photo);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $type = explode(';', $photo)[0];
            $type = explode('/', $type)[1];

            $filename = Str::random(10).'_'.time().'.'.$type;
            $path = public_path().'/img/'.$filename;
            $presence->photo = 'img/'.$filename;
            file_put_contents($path, $data);
        }

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
