<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_File extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rented()
    {
        return $this->belongsTo(Rented::class);
    }
}
