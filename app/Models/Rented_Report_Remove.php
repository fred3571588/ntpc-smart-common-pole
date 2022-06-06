<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_Report_Remove extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rented()
    {
        return $this->belongsTo(Rented::class);
    }

    public function photo()
    {
        return $this->hasMany(Rented_Report_Remove_Photo::class);
    }

    public function file()
    {
        return $this->hasMany(Rented_Report_Remove_File::class);
    }
}
