<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole_Attached extends Model
{
    use HasFactory;

    protected $guard = [];

    public function smartpole()
    {
        return $this->belongsTo(SmartPole::class);
    }

    public function device()
    {
        return $this->hasOne(AttachedDevice::class);
    }
}
