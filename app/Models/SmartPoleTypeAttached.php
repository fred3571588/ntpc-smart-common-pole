<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPoleTypeAttached extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function smartpoletype()
    {
        return $this->belongsTo(SmartPoleType::class);
    }

    public function device()
    {
        return $this->hasOne(SmartPole_Type_Attached_Device::class);
    }

}
