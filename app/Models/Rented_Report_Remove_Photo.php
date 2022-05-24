<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_Report_Remove_Photo extends Model
{
    use HasFactory;

    protected $guard = [];

    public function report_remove()
    {
        return $this->belongsTo(Rented_Report_Remove::class);
    }
}
