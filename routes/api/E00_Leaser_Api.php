<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\E00_Leaser\E01_Leaser_Manage_Controller;

Route::prefix('leaser_review')->middleware('EnsureTokenIsValid')->group(function () {
    Route::get('/check', [E01_Leaser_Manage_Controller::class,'check'])->name('leaser_check');
    Route::get('/data',[E01_Leaser_Manage_Controller::class,'data'])->name('leaser_data');
});


