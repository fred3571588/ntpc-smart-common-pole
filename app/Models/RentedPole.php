<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentedPole extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rented()
    {
        return $this->belongsTo(Rented::class);
    }

    public function smartpole()
    {
        return $this->hasOne(Smartpole::class);
    }
}
