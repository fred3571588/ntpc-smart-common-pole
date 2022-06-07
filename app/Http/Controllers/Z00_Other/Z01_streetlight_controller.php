<?php

namespace App\Http\Controllers\Z00_Other;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class Z01_streetlight_controller extends Controller
{
    //
    public function convertXY($TWD97X,$TWD97Y)
    {
        $result = _Function\convert::convert2LatLng($TWD97X,$TWD97Y);
    }
}
