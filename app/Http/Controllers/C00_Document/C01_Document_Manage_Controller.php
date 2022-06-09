<?php

namespace App\Http\Controllers\C00_Document;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Document;
use Illuminate\Http\Request;

class C01_Document_Manage_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Document::get();

        return response()->JsonWithCode($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = Document::create([
            'file_path' => $request->file_path,
            'file_name' => $request->file_name,
            'memo' => $request->memo,
            'status' => $request->status,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        return response()->JsonWithCode(["msg" => "success"], 200);
    }

    public function storeby($announcement_id, Request $request)
    {
        $accouncement = Announcement::findOrFail($announcement_id);

        $document = $accouncement->document()->create([
            'file_path' => $request->file_path,
            'file_name' => $request->file_name,
            'memo' => $request->memo,
            'status' => $request->status,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);


        return response()->JsonWithCode(["msg" => "success"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::findOrFail($id);

        return response()->JsonWithCode($document);
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
        $document = Document::findOrFail($id);
        $document->update([
            'file_path' => $request->file_path,
            'file_name' => $request->file_name,
            'memo' => $request->memo,
            'status' => $request->status,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ]);

        $document->save();

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
        $document = Document::findOrFail($id);

        $document->delete();

        return response()->JsonWithCode(["msg" => "success"], 200);
    }
}
