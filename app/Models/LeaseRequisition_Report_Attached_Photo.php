<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisition_Report_Attached_Photo extends Model
{
    use HasFactory;

    protected $guard = [];

    public function report_attached()
    {
        return $this->belongsTo(LeaseRequisition_Report_Attached::class);
    }
}
