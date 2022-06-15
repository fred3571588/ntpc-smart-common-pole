<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachedDevice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attached()
    {
        return $this->belongsTo(SmartPoleAttached::class);
    }

    public function cost()
    {
        return $this->hasOne(AttachedDevice_Cost::class);
    }
}
