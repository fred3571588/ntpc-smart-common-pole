<?php

namespace App\Http\Controllers\E00_Leaser;

use App\Http\Controllers\Controller;
use App\Models\Leaser;
use Illuminate\Http\Request;

class E01_Leaser_Manage_Controller extends Controller
{
    public function check(Request $request)
    {
        $leaser = Leaser::findOrFail($request->input('leaser_id'));
        $leaser_review_check = $leaser->review()->exists;
        if ($leaser_review_check) {
            if ($leaser->review()->first()->pass) {
                return response()->jsonWithCode(["msg" => "succrss"], 200);
            } else {
                return response()->jsonWithCode(["msg" => "審核未通過"], 401);
            }
        } else {
            return response()->jsonWithCode(["msg" => "尚未建立審核資料"], 403);
        }
    }

    public function data(Request $request)
    {
        $leaser = Leaser::findOrFail($request->input('leaser_id'));
        return response()->jsonWithCode(["msg" => "尚未建立審核資料"], 200);
    }
}
