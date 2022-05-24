<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_Report_Attached_Photo extends Model
{
    use HasFactory;

    protected $guard = [];

    public function report_attached()
    {
        return $this->belongsTo(Rented_Report_Attached::class);
    }
}
