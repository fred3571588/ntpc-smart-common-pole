<?php

use App\Http\Controllers\B01_Announcement_Manage_controller;
use App\Http\Resources\AnnouncementResource;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

//api resource 送出資料格式供前端取得
Route::get('/announcement',function(){
    return AnnouncementResource::collection(Announcement::all());
});

Route::resource('announcements',B01_Announcement_Manage_controller::class);

