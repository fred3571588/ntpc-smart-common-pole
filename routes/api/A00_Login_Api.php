<?php

// A00_系統首頁

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

// 登入與驗證
// Route::prefix('A10')->group(function () {
//     // // 測試token是否仍有效 => 無效則產生新的Token => 只要呼叫API就會檢查是否過期，因為middleware設定時限為一小時。
//     Route::get('/userToken',function () {
//         return view('fake');
//     });
//     // // 重新核發token(重新計算時間) => 直接產生新的Token，舊的為無效。
//     // Route::get('/AuthNewToken', 'A10_Login@AuthNewToken')->defaults('doNotLogAction', true);
// });

Route::get('users/{id}', function ($id) {

});
