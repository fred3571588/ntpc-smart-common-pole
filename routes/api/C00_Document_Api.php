<?php

use App\Http\Controllers\C00_Document\C01_Document_Manage_Controller;
use Illuminate\Support\Facades\Route;



Route::resource('documents', C01_Document_Manage_Controller::class);

Route::post('documents/{id}',[C01_Document_Manage_Controller::class,'storeby']);
