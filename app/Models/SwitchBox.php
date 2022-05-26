<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwitchBox extends Model
{
    use HasFactory;

    protected $guard = [];

    public function loop()
    {
        return $this->hasMany(Loop::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
