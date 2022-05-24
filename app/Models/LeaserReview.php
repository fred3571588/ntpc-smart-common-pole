<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaserReview extends Model
{
    use HasFactory;

    protected $guard = [];

    public function leaser()
    {
        return $this->belongsTo(Leaser::class);
    }
}
