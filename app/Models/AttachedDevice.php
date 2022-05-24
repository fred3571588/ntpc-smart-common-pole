<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachedDevice extends Model
{
    use HasFactory;

    protected $guard = [];

    public function attached()
    {
        return $this->belongsTo(smartpole_attached::class);
    }

    public function cost()
    {
        return $this->hasOne(AttachedDevice_Cost::class);
    }
}
