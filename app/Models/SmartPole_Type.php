<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole_Type extends Model
{
    use HasFactory;

    protected $guard = [];

    public function smartpole()
    {
        return $this->belongsTo(SmartPole::class);
    }

    public function file()
    {
        return $this->hasMany(SmartPole_Type_File::class);
    }

    public function attached()
    {
        return $this->hasMany(SmartPole_Type_Attached::class);
    }
}
