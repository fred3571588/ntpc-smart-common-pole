<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisition_Report_Attached extends Model
{
    use HasFactory;

    protected $guard = [];

    public function leaseRequisition()
    {
        return $this->belongsTo(LeaseRequisition::class);
    }
    public function file()
    {
        return $this->hasMany(LeaseRequisition_Report_Attached_File::class);
    }

    public function photo()
    {
        return $this->hasMany(LeaseRequisition_Report_Attached_Photo::class);
    }
}
