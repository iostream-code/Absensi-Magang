<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
>>>>>>> 3749f46 (Adding logic for login user)
class User extends Authenticatable
{
    protected $guarded = ['id'];

    public function Presences()
    {
        return $this->hasMany(Presence::class);
    }
}
