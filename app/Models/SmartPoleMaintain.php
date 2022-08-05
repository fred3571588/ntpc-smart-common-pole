<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartPoleMaintain extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function smartpole()
    {
        $this->belongsTo(SmartPole::class);
    }
}
