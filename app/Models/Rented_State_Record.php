<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_State_Record extends Model
{
    use HasFactory;

    protected $guard = [];

    public function rented_state()
    {
        return $this->belongsTo(Rented_State::class);
    }
}
