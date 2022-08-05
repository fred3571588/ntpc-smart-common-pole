<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisitionReportAttachedPhoto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function report_attached()
    {
        return $this->belongsTo(LeaseRequisitionReportAttached::class);
    }
}
