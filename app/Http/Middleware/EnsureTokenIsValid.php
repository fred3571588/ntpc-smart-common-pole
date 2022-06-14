<?php

namespace App\Http\Middleware;

use App\Models\Leaser;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $leaser_id = $request->input('leaser_id');
        $token = $request->input('token');
        $leaser = Leaser::findOrFail($leaser_id);
        $leaser_token = $leaser->token()->latest()->first();
        if ($token != $leaser_token->access_token) {
            return response()->JsonWithCode(["msg" => "Token 驗證失敗"], 401);
        }elseif ($leaser_token->work != 1) {
            return response()->JsonWithCode(["msg" => "Token 驗證失敗"], 401);
        }elseif ($leaser_token->token_maturity_at < Carbon::now()) {
            return response()->JsonWithCode(["msg" => "Token 驗證失敗"], 401);
        }else{
            return $next($request);
        }
    }
}
