<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented extends Model
{
    use HasFactory;

    protected $guard = [];

    public function leaser()
    {
        return $this->belongsTo(Leaser::class);
    }

    public function state()
    {
        return $this->hasOne(Rented_State::class);
    }

    public function file()
    {
        return $this->hasMany(Rented_File::class);
    }

    public function pole()
    {
        return $this->hasMany(Rented_Pole::class);
    }

    public function report_attached()
    {
        return $this->hasOne(Rented_Report_Attached::class);
    }

    public function report_remove()
    {
        return $this->hasOne(Rented_Report_Remove::class);
    }
}
