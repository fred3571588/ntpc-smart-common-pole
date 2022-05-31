<?php

// A00_系統首頁
// namespace App\Http\Controllers\A00_Login;
use Illuminate\Support\Facades\Route;

// 登入與驗證
Route::prefix('A10')->group(function () {
    // // 測試token是否仍有效 => 無效則產生新的Token => 只要呼叫API就會檢查是否過期，因為middleware設定時限為一小時。
    // Route::get('/userToken', 'A10_Login@userToken');
    // // 重新核發token(重新計算時間) => 直接產生新的Token，舊的為無效。
    // Route::get('/AuthNewToken', 'A10_Login@AuthNewToken')->defaults('doNotLogAction', true);
});