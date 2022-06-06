<?php

namespace App\Http\Controllers\B00_Announcement;

use App\Http\Controllers\Controller;


use App\Models\Announcement;
use Illuminate\Http\Request;

class B01_Announcement_Manage_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responce = Announcement::get();

        return $responce;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $announcement = Announcement::create([
            'announcement_at' => $request->announcement_at,
            'place' => $request->place,
            'content' => $request->content,
            'memo' => $request->memo,
            'status' => $request->status,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        return response()->JsonWithCode($announcement,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);

        return response()->JsonWithCode($announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $announcement = Announcement::findOrFail($id);
        $announcement->update([
            'announcement_at' => $request->announcement_at,
            'place' => $request->place,
            'content' => $request->content,
            'memo' => $request->memo,
            'status' => $request->status,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        $announcement->save();

        return response()->JsonWithCode(["msg" => "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $announcement = Announcement::findOrFail($id);

        $announcement->delete();

        return response()->JsonWithCode(["msg" => "success"], 200);
    }
}
