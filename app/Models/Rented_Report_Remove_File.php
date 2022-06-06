<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_Report_Remove_File extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function report_remove()
    {
        return $this->belongsTo(Rented_Report_Remove::class);
    }
}
