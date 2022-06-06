<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole_Type_Attached extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function smartpole_type()
    {
        return $this->belongsTo(SmartPole_Type::class);
    }

    public function device()
    {
        return $this->hasOne(SmartPole_Type_Attached_Device::class);
    }

}
