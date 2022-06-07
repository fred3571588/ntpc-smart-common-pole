<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachedDevice_Cost extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function device()
    {
        return $this->belongsTo(AttachedDevice::class);
    }
}
