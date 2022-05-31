<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisition_Extend extends Model
{
    use HasFactory;

    protected $guard = [];

    public function leaseRequisition()
    {
        return $this->belongsTo(LeaseRequisition::class);
    }
}
