<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ntpc_connect_controller extends Controller
{
    public function redirect(Request $request)
    {
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
    }

    public function callback(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Basic' . ' ' . base64_encode("MDVjMWM1YTMtOTQ2MS00NTE0LWE1MjEtNDJiZGFhMGFjMDUz" . ':' . "U0PbvgUuicqosehtAMB56u9Rcvroc1R_WZcrO02q1zU"),
        ])->asForm()->post('https://openidtest.ntpc.gov.tw/token', [
            'grant_type' => 'authorization_code',
            'code' => $request->code,
            'redirect_uri' => urlencode("http://211.72.231.157/ntpc_SmartPole/callback"),
        ]);
        return redirect()->action(
            [ntpc_connect_controller::class, 'ntpc_userinfo'],
            ['data' => $response->json()]
        );
        // return redirect('/ntpc_userinfo')->with('data', $response->json());
         // $request->merge(['data' => $response->json()]);
        // return $response->json();
    }

    public function ntpc_userinfo(Request $request ,$data)
    {
        dd($data);
        $response = Http::withHeaders(['Authorization' => 'Bearer' . ' ' . $request->access_token
        ])->asForm()->post('https://openidtest.ntpc.gov.tw/userinfo');

        return json_encode($response->json(), JSON_UNESCAPED_UNICODE);
    }
}
