<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole_Type_File extends Model
{
    use HasFactory;

    protected $guard = [];

    public function type_attached()
    {
        return $this->belongsTo(SmartPole_Type_Attached::class);
    }
}
