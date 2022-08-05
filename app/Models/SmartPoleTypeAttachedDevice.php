<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPoleTypeAttachedDevice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type_attached()
    {
        return $this->belongsTo(SmartPoleTypeAttached::class);
    }
}
