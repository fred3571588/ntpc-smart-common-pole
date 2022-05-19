<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole extends Model
{
    use HasFactory;

    protected $guard = [];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function smartpole_type()
    {
        return $this->hasMany(SmartPole_Type::class);
    }
}
