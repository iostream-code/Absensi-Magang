<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Presence extends Authenticatable
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsTo(User::class);
    }
}
