<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisitionReportAttached extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leaseRequisition()
    {
        return $this->belongsTo(LeaseRequisition::class);
    }
    public function file()
    {
        return $this->hasMany(LeaseRequisitionReportAttachedFile::class);
    }

    public function photo()
    {
        return $this->hasMany(LeaseRequisitionReportAttachedPhoto::class);
    }
}
