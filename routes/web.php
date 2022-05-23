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
    $request->session()->put('state', $state = Str::random(40));
    $request->session()->put('nonce', $nonce = Str::random(40));
    $query = http_build_query([
        'client_id' => 'MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz',
        'redirect_uri' => 'http://211.72.231.157/ntpc_SmartPole/callback',
        'response_type' => 'code',
        'scope' => 'openid profile personal email address phone',
        'state' => $state,
        'nonce' => $nonce,
    ]);
    return redirect('https://openid.ntpc.gov.tw/authorize?'.$query);
});

Route::get('/callback', function (Request $request) {
    $response = Http::withHeaders([
        'Authorization' => 'Basic ' . base64_encode('MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz;U0PbvgUuicqosehtAMB56u9Rcvroc1R_WZcrO02q1zU'),
    ])->post('https://openid.ntpc.gov.tw/token', [
        'grant_type' => 'authorization_code',
        // 'client_id' => 'MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz',
        // 'client_secret' => 'U0PbvgUuicqosehtAMB56u9Rcvroc1R_WZcrO02q1zU',
        'redirect_uri' => 'http://211.72.231.157/ntpc_SmartPole/callback',
        'code' => $request->code,
    ]);

    return $response->json();
});

Route::get('/refresh_token', function (Request $request) {
    $response = Http::asForm()->post('http://192.168.1.182/project/laravel-server/public/oauth/token', [
        'grant_type' => 'refresh_token',
        'refresh_token' => 'def50200251747203507e5cb54336c35e2fb76ec3651ba17bf0e64bdfc72a8b1595d0fee30240530dc16070fa76352749ab3e544daa8282ecf03719216f4eac7fc9a10b75876b7248cb04d9f2a72e0e1cff5cfa651663c6ef38f9dfdb13118b41d161790279f9234f66849fe1060b4b2200601a9bc8fc6f323fa0ecfa28627d1360f0edc001e12cbb6ca26b223279aa2863e9e04fb1a843cfdf45e4f50e5e6350f08e8c272f0d2677e2369881a025b9f2531ddba4bda10dffa7878289c120fae6e8e8e5784ee66d58f5d9d5aea089bb0ae2e64a87d474aa4716ea5b14bce5ce3ad31c8c5ba0f26e98ab1ac30bb0edc78b878c1d97add9a6c12173a5779dfcd97f4404cb6460fe44a20724fc99a572f5ce9d216214265e61e007dbb0c49953240efcf8a73a3f3b35db2a2043a5c9264b150a539e24c4ac28ed3f18e170b5166fbc4107243a3064d7a1363e840f7b9f7739fa5421ba78e82eb1380df5fdc46d98bde',
        'client_id' => '8',
        'client_secret' => 'AGKtAormheckwXeagqotOaHATOmgJcXmRMVkUlzw',
        'scope' => '',
    ]);

    return $response->json();
});
