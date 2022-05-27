<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loop extends Model
{
    use HasFactory;

    protected $guard = [];

    public function switchbox()
    {
        return $this->belongsTo(SwitchBox::class);
    }
}
