<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole_Type_Attached extends Model
{
    use HasFactory;

    protected $guard = [];

    public function smartpole()
    {
        return $this->belongsTo(Smartpole::class);
    }

    public function file()
    {
        return $this->hasMany(SmartPole_Type_File::class);
    }

    public function device()
    {
        return $this->hasMany(SmartPole_Type_Attached_Device::class);
    }
}
