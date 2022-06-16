<?php

Route::prefix('attachment')->group(function () {
    Route::get('search',[F01_Attachment_Manage_Controller::class,'search'])->name('attachment_search');
});
