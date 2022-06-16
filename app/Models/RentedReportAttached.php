<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentedReportAttached extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rented()
    {
        return $this->belongsTo(Rented::class);
    }

    public function photo()
    {
        return $this->hasMany(RentedReportAttachedPhoto::class);
    }

    public function file()
    {
        return $this->hasMany(RentedReportAttachedFile::class);
    }
}
