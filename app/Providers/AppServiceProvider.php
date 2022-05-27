<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * https://laravel.com/docs/8.x/responses
         * @param mixed $data 回傳資料
         * @param int $code http狀態碼 https://developer.mozilla.org/zh-TW/docs/Web/HTTP/Status
         * @param string $msg 傳遞訊息
         * @param int $line 程式執行行數
         */
        response()::macro('JsonWithCode', function ($data, int $code = 200, int $line = -1, string $msg = '') {
            $other = [];
            // 想提供給前端的訊息
            if ($msg) {
                $other['msg'] = $msg;
            }
            // 後端程式碼行數
            if ($line !== -1) {
                $other['line'] = $line;
            }

            // code
            if (gettype($data) === 'array' && isset($data['code']) && gettype($data['code']) === 'integer') {
                // code
                $code = $data['code'];
            }
            // 合併方式
            if (gettype($data) === 'array' && isset($data['data'])) {
                // 已經有data索引
                $data = array_merge($data, $other);
            } else {
                // 沒有data索引
                $data = array_merge(['data' => $data], $other);
            }

            // 使用view debugbar :有使用再開
            // return view('debug', ['code'=>$code,'data'=>$data]);

            // 自動回傳json格式資料
            return response()->json($data, $code);
        });
    }
}
