<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leaser()
    {
        return $this->belongsTo(Leaser::class);
    }

    public function pole()
    {
        return $this->hasMany(LeaseRequisition_Pole::class);
    }

    public function file()
    {
        return $this->hasMany(LeaseRequisition_File::class);
    }

    public function state()
    {
        return $this->hasOne(LeaseRequisition_State::class);
    }

    public function report_attached()
    {
        return $this->hasOne(LeaseRequisition_Report_Attached::class);
    }

    public function smartpole()
    {
        return $this->hasMany(SmartPole::class);
    }

    public function extend()
    {
        return $this->hasOne(LeaseRequisitionExtend::class);
    }
}
