<?php

namespace App\Http\Controllers\E00_Leaser;

use App\Http\Controllers\Controller;
use App\Models\Leaser;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class E01_Leaser_Manage_Controller extends Controller
{
    public function check(Request $request)
    {
        $leaser = Leaser::findOrFail($request->input('leaser_id'));
        $leaser_review_check = $leaser->review()->exists;
        if ($leaser_review_check) {
            if ($leaser->review()->first()->pass) {
                return response()->jsonWithCode(['msg' => 'succrss'], 200);
            } else {
                return response()->jsonWithCode(['msg' => '審核未通過'], 401);
            }
        } else {
            return response()->jsonWithCode(['msg' => '尚未建立審核資料'], 403);
        }
    }

    public function data(Request $request)
    {
        $leaser = Leaser::findOrFail($request->input('leaser_id'));
        return response()->jsonWithCode(['taxnumber' => $leaser->taxnumber,
                                        'name' => $leaser->enterprise_name,
                                        'representative' => $leaser->name,
                                        'contacts_name' => $leaser->contacts_name,
                                        'contacts_email' => $leaser->contacts_email,
                                        'contacts_gender' => $leaser->contacts_gender,
                                        'birthday' => $leaser->birthday,
                                        'company_address' => $leaser->company_address,
                                        'address' => $leaser->address,
                                        'contacts_phone' => $leaser->contacts_phone,], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'taxnumber' => 'required|unique:leasers,taxnumber|bail',
            'name' => 'required|bail',
            'representative' => 'required|bail',
            'contacts_name' => 'required|bail',
            'contacts_email' => 'required|email|bail',
            'contacts_gender' => 'required|bail',
            'birthdate' => 'required|date|bail',
            'company_address' => 'required|bail',
            'address' => 'required|bail',
            'contacts_phone' => 'required|bail',
            'leaser_file' => 'required|file',
        ]);

        $leaser = Leaser::findOrFail($request->input('leaser_id'));
        $leaser->update([
            'taxnumber' => $validated['taxnumber'],
            'name' => $validated['enterprise_name'],
            'representative' => $validated['name'],
            'contacts_name' => $validated['contacts_name'],
            'contacts_email' => $validated['contacts_email'],
            'contacts_gender' => $validated['contacts_gender'],
            'birthday' => $validated['birthday'],
            'company_address' => $validated['company_address'],
            'address' => $validated['address'],
            'contacts_phone' => $validated['contacts_phone'],
        ]);

        $leaser->review()->create([
            'status' => 0,
            'created_by' => 999,
            'updated_by' => 999,
        ]);

        $leaser_file = $request->file('leaser_file');
        $filename = time().$leaser_file->getClientOriginalName();
        Storage::putFile('leaser_file',new File('/leaserReview/document'));
        ///後續回來想想@@
    }
}
