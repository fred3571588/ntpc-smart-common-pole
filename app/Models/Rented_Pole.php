<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_Pole extends Model
{
    use HasFactory;

    protected $guard = [];

    public function rented()
    {
        return $this->belongsTo(Rented::class);
    }
}
