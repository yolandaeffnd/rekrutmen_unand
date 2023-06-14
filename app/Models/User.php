<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'level',
        'email',
        'password',
        'id_unit',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function units()
    {
        return $this->belongsTo(Unit::class, 'id_unit');
    }

    public function isDeveloper()
    {
        return (Auth::check() && $this->level == 'developer');
    }

    public function isPelamar()
    {
        return (Auth::check() && $this->level == 'pelamar');
    }

    public function isUser()
    {
        return (Auth::check() && $this->level == 'user');
    }

    public function registrasi()
    {
        return $this->hasOne(Registrasi::class, 'id_user');
    }
}
