<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rented_pole()
    {
        return $this->belongsTo(Rented_Pole::class);
    }

    public function leaseRequisition_pole()
    {
        return $this->belongsTo(LeaseRequisition_Pole::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function smart_pole_type()
    {
        return $this->belongsTo(SmartPoleType::class);
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
