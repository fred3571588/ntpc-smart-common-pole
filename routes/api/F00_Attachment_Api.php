<?php

Route::prefix('attachment')->group(function () {
    Route::get('search',[F01_Attachment_Manage_Controller::class,'search'])->name('attachment_search');
    Route::get('detail',[F01_Attachment_Manage_Controller::class,'detail'])->name('attachment_detail');
});
