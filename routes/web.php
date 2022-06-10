<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

Route::get('/redirect', function (Request $request) {
    $state = Str::random(40);
    $nonce = Str::random(40);
    $query = http_build_query([
        'response_type' => 'code',
        'client_id' => 'MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz',
        'redirect_uri' => 'http://211.72.231.157/ntpc_SmartPole/callback',
        'scope' => 'openid profile personal email address phone',
        'state' => $state,
        'nonce' => $nonce,
    ]);
    return redirect('https://openidtest.ntpc.gov.tw/authorize?'.$query);
});

Route::get('/callback', function (Request $request) {
    $response = Http::withHeaders([
        'Authorization' => 'Basic' . ' ' . base64_encode("MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz" . ':' . "U0PbvgUuicqosehtAMB56u9Rcvroc1R_WZcrO02q1zU"),
    ])->asForm()->post('https://openidtest.ntpc.gov.tw/token', [
        'grant_type' => 'authorization_code',
        'code' => $request->code,
        'redirect_uri' => urlencode("http://211.72.231.157/ntpc_SmartPole/callback"),
    ]);

    return redirect('/ntpc_userinfo');
    // return $response->json();
});

Route::get('/ntpc_userinfo',function(Request $request){
    dd($request);
    $response = Http::withHeaders([
        'Authorization' => 'Bearer' . ' ' . $request->access_token
    ])->asForm()->post('https://openidtest.ntpc.gov.tw/userinfo');

    return json_encode($response->json(), JSON_UNESCAPED_UNICODE);
});

Route::get('/refresh_token', function (Request $request) {
    $response = Http::asForm()->post('https://openidtest.ntpc.gov.tw/refresh', [
        'client_id' => 'MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz',
        'client_secret' => 'U0PbvgUuicqosehtAMB56u9Rcvroc1R_WZcrO02q1zU',
        'grant_type' => 'refresh_token',
        'refresh_token' => 'zir6PvkbR6nAtTk0ZiRM-IhaAYIYljtEnBUxXmVF67U',
    ]);

    return $response->json();
});
