<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $guard = [];

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}
