<?php

namespace App\Http\Controllers\F00_Attachment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\SmartPole;
use Illuminate\Support\Facades\DB;

class F01_Attachment_Manage_Controller extends Controller
{
    public function search(Request $request)
    {
        $validated = $request->validate([
            'address' => 'string|nullable',
            'smartpole_id' => 'numeric|nullable',
            'company' => 'string|nullable',
            'area' => 'string|nullable',
            'pole_status' => 'numeric|nullable',
            'attachment' => 'string|nullable,'
        ]);
        if (!empty($validated['area'])) {
            $area_id = Area::where('name', $validated['area'])->first()->id;
        }


        // $sort_smartpole = SmartPole::where('address','LIKE','%' . $validated['address'] . '%')
        //                             ->orWhere('smart_pole_id',$validated['smart_pole_id'])
        //                             ->orWhere('build_company',$validated['company'])
        //                             ->orWhere('area_id',$area_id)
        //                             ->orWhere('status',$validated['pole_status'])
        //                             ->get(); //依條件搜尋

        $sort_smartpole = DB::table('smart_poles')->when(!empty($validated['address']), function ($query) use ($validated) {
            return $query->where('address', $validated['address']);
        })->when(!empty($validated['smart_pole_id']), function ($query) use ($validated) {
            return $query->where('smart_pole_id', $validated['smart_pole_id']);
        })->when(!empty($validated['company']), function ($query) use ($validated) {
            return $query->where('build_company', $validated['company']);
        })->when(!empty($validated['area']), function ($query) use ($area_id) {
            return $query->where('area_id', $area_id);
        })->when(!empty($validated['pole_status']), function ($query) use ($validated) {
            return $query->where('status', $validated['pole_status']);
        })->get();

        if (!empty($validated['attachment'])) {
            $sort_smartpole->attached()->where('attachment', $validated['attachment'])->get();
        }
        $pole_limit_weight = $sort_smartpole->smart_pole_type()->attached_weight->get();
        $merged = $sort_smartpole->merge($pole_limit_weight);
        //用merge
        return response()->JsonWithCode($merged);
    }
}
