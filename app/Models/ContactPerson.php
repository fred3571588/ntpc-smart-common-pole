<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leaser()
    {
        return $this->belongsTo(Leaser::class);
    }
}
