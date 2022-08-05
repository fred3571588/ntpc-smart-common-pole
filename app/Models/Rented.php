<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leaser()
    {
        return $this->belongsTo(Leaser::class);
    }

    public function state()
    {
        return $this->hasOne(RentedState::class);
    }

    public function file()
    {
        return $this->hasMany(RentedFile::class);
    }

    public function pole()
    {
        return $this->hasMany(RentedPole::class);
    }

    public function report_attached()
    {
        return $this->hasOne(RentedReportAttached::class);
    }

    public function report_remove()
    {
        return $this->hasOne(RentedReportRemove::class);
    }
}
