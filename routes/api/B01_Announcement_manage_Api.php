<?php

use App\Http\Resources\AnnouncementResource;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/announcement',function(){
    return AnnouncementResource::collection(Announcement::all());
});
