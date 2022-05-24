<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Permission extends Model
{
    use HasFactory;

    protected $guard = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
