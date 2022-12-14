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
        return $this->hasMany(LeaserToken::class);
    }

    // public function latestToken()
    // {
    //     return $this->hasOne(LeaserToken::class)->latestOfMany();
    // }

    public function rented()
    {
        return $this->hasMany(Rented::class);
    }

    public function leaseRequisition()
    {
        return $this->hasMany(LeaseRequisition::class);
    }

    public function contacts_person()
    {
        return $this->hasOne(ContactPerson::class);
    }
}
