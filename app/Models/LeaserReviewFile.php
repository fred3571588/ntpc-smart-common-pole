<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaserReviewFile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function LeaserReview()
    {
        return $this->belongsTo(LeaserReview::class);
    }
}
