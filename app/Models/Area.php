<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $guard = [];

    public function smartpole()
    {
        return $this->hasMany(SmartPole::class);
    }

    public function switchbox()
    {
        return $this->hasMany(SwitchBox::class);
    }
}
