<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPoleAttached extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function smartpole()
    {
        return $this->belongsTo(SmartPole::class);
    }

    public function device()
    {
        return $this->hasOne(AttachedDevice::class);
    }
}
