<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentedReportRemoveFile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function report_remove()
    {
        return $this->belongsTo(RentedReportRemove::class);
    }
}
