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
        return $this->hasMany(LeaseRequisitionPole::class);
    }

    public function file()
    {
        return $this->hasMany(LeaseRequisitionFile::class);
    }

    public function state()
    {
        return $this->hasOne(LeaseRequisitionState::class);
    }

    public function report_attached()
    {
        return $this->hasOne(LeaseRequisitionReportAttached::class);
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
