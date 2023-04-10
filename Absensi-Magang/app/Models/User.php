<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $guarded = ['id'];

    public function Presences()
    {
        return $this->hasMany(Presence::class);
    }
}
