<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole extends Model
{
    use HasFactory;

    protected $guard = [];

    public function rented_pole()
    {
        return $this->belongsTo(Rented_Pole::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function type()
    {
        return $this->hasMany(SmartPole_Type::class);
    }

    public function photo()
    {
        return $this->hasMany(SmartPole_Photo::class);
    }

    public function attached()
    {
        return $this->hasMany(SmartPole_Attached::class);
    }
}
