<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaser extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function review()
    {
        return $this->hasOne(LeaserReview::class);
    }

    public function token()
    {
        return $this->hasOne(LeaserToken::class);
    }

    public function rented()
    {
        return $this->hasMany(Rented::class);
    }

    public function leaseRequisition()
    {
        return $this->hasMany(LeaseRequisition::class);
    }
}
