<?php

namespace App\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
=======
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
>>>>>>> 4336d30d1dbac9d84ec7f121ce9b8619b8e8b334
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
>>>>>>> 3749f46 (Adding logic for login user)
=======
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
>>>>>>> 36b7858 (Modify login controller)
=======

>>>>>>> 4336d30 (Modify login controller n user model)
=======
>>>>>>> 4336d30d1dbac9d84ec7f121ce9b8619b8e8b334
class User extends Authenticatable
{
    // protected $guarded = ['id'];

    // public function Presences()
    // {
    //     return $this->hasMany(Presence::class);
    // }

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'username',
        'status',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
