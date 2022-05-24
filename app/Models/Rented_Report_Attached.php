<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_Report_Attached extends Model
{
    use HasFactory;

    protected $guard = [];

    public function rented()
    {
        return $this->belongsTo(Rented::class);
    }

    public function photo()
    {
        return $this->hasMany(Rented_Report_Attached_Photo::class);
    }

    public function file()
    {
        return $this->hasMany(Rented_Report_Attached_File::class);
    }
}
