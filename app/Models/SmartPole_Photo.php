<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPole_Photo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function smartpole()
    {
        return $this->belongsTo(SmartPole::class);
    }
}
