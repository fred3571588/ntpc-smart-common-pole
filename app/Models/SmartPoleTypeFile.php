<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPoleTypeFile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function smartpole_type()
    {
        return $this->belongsTo(SmartPoleType::class);
    }
}
