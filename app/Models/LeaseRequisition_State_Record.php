<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseRequisition_State_Record extends Model
{
    use HasFactory;

    protected $guard = [];

    public function state()
    {
        return $this->belongsTo(LeaseRequisition_State::class);
    }
}
