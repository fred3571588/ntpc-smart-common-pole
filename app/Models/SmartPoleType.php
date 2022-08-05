<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPoleType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function smartpole()
    {
        return $this->hasMany(SmartPole::class);
    }

    public function file()
    {
        return $this->hasMany(SmartPoleTypeFile::class);
    }

    public function attached()
    {
        return $this->hasMany(SmartPoleTypeAttached::class);
    }
}
