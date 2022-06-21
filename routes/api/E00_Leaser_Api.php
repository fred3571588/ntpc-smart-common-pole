<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\E00_Leaser\E01_Leaser_Manage_Controller;
use App\Http\Middleware\EnsureTokenIsValid;

Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::prefix('leaser_review')->group(function () {
        Route::post('/check', [E01_Leaser_Manage_Controller::class,'check'])->name('leaserReview_check');
        Route::post('/data', [E01_Leaser_Manage_Controller::class,'data'])->name('leaserReview_data');
        Route::post('/store', [E01_Leaser_Manage_Controller::class,'store'])->name('leaserReview_store');
    });
});
