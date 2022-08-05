<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentedReportAttachedPhoto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function report_attached()
    {
        return $this->belongsTo(RentedReportAttached::class);
    }
}
