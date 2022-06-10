<?php

use App\Http\Controllers\ntpc_connect_controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('fake');
});

Route::get('/redirect', [ntpc_connect_controller::class,'redirect'])->name('redirect');

Route::get('/callback',[ntpc_connect_controller::class,'callback'])->name('callback');

// Route::get('/ntpc_userinfo',[ntpc_connect_controller::class,'ntpc_userinfo'])->name('ntpc_userinfo');

Route::get('/refresh_token', function (Request $request) {
    $response = Http::asForm()->post('https://openidtest.ntpc.gov.tw/refresh', [
        'client_id' => 'MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz',
        'client_secret' => 'U0PbvgUuicqosehtAMB56u9Rcvroc1R_WZcrO02q1zU',
        'grant_type' => 'refresh_token',
        'refresh_token' => 'zir6PvkbR6nAtTk0ZiRM-IhaAYIYljtEnBUxXmVF67U',
    ]);

    return $response->json();
});
