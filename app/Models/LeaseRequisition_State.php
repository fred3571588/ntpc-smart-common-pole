<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisition_State extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leaseRequisition()
    {
        return $this->belongsTo(leaseRequisition::class);
    }

    public function record()
    {
        return $this->hasMany(LeaseRequisition_State_Record::class);
    }
}
