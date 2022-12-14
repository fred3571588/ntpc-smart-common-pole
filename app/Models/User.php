<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function logOperation()
    {
        return $this->hasMany(UserLogOperation::class);
    }

    public function permission()
    {
        return $this->hasOne(UserPermission::class);
    }

    public function token()
    {
        return $this->hasOne(UserToken::class);
    }

    public function announcement()
    {
        return $this->hasMany(Announcement::class);
    }
}
