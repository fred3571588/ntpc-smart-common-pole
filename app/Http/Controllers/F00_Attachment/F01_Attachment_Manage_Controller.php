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
        $area_id = null;
        $validated = $request->validate([
            'address' => 'nullable|string',
            'smartpole_id' => 'nullable|numeric',
            'company' => 'nullable|string',
            'area' => 'nullable|string',
            'pole_status' => 'nullable|numeric',
            'attachment' => 'nullable|string',
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
             $query->where('address', 'LIKE', '%' .$validated['address']. '%');
        })->when(!empty($validated['smart_pole_id']), function ($query) use ($validated) {
             $query->where('smart_pole_id', $validated['smart_pole_id']);
        })->when(!empty($validated['company']), function ($query) use ($validated) {
             $query->where('build_company', 'LIKE', '%' .$validated['company']. '%');
        })->when(!empty($validated['area']), function ($query) use ($area_id) {
             $query->where('area_id', $area_id);
        })->when(!empty($validated['pole_status']), function ($query) use ($validated) {
             $query->where('status', $validated['pole_status']);
        },function ($query)
        {
            return $query;
        })->get();
        $result = $sort_smartpole->all();
        dd($result);
        // if (!empty($validated['attachment'])) {
        //     $sort_smartpole->attached()->where('attachment', $validated['attachment'])->get();
        // }

        // $pole_limit_weight = $sort_smartpole->smart_pole_type()->attached_weight->get();

        //用merge
        // return response([$sort_smartpole,$pole_limit_weight], 200);
    }

    public function detail(Request $request)
    {
        $validated = $request->validate([
            'smartpole_id' => 'numeric|required'
        ]);

        $smartpole = SmartPole::findOrFail($validated['smartpole_id']);
        $smartpole_type = $smartpole->smart_pole_type()->first();
        $attachment = $smartpole->attached()->get();
        return response()->JsonWithCode([$smartpole,$smartpole_type,$attachment], 200);
    }
}
