<?php

namespace App\Http\Controllers;

use App\Models\Leaser;
use App\Models\LeaserToken;
use Carbon\Carbon;
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

        $tokens = $response->json(); //取得的新北市民access_token

        $get_ntpc_userinfo = Http::withHeaders(['Authorization' => 'Bearer' . ' ' . $tokens['access_token']
        ])->asForm()->post('https://openidtest.ntpc.gov.tw/userinfo');

        $userinfo_src =  json_encode($get_ntpc_userinfo->json(), JSON_UNESCAPED_UNICODE);
        $userinfo = json_decode($userinfo_src, true);
        $user_pass = false;
        //尋找是否有工商憑證卡
        $card_pass = false;
        foreach ($userinfo['certificates'] as $key => $value) {
            if ($userinfo['certificates'][$key]['category'] == 'MOEACA') {
                $card_pass = true;
                break;
            }
        }
        if ($userinfo['category'] != 'e') {
            $user_pass = false;
        } elseif ($card_pass) {
            $user_pass = true;
        } else {
            $user_pass = false;
        }

        if ($user_pass) {
            $leaser = Leaser::firstOrCreate(
                ['account' => $userinfo['sub']],
                [
                'account' => $userinfo['sub'],
                'certificate' => $userinfo['certificates'][$key]['certificate'],
                'name' => $userinfo['representative'],
                'enterprise_name' => $userinfo['name'],
                'taxnumber' => $userinfo['preferred_username'],
                'contacts_name' => $userinfo['family_name'] . $userinfo['given_name'],
                'contacts_gender' => $userinfo['gender'],
                'contacts_phone' => $userinfo['phone_number'],
                'contacts_email' => $userinfo['email'],
                'status' => 1,
                'active' => true,
                'created_by' => 999,
                'updated_by' => 999,
            ]
            );
            $leaser->token()->create([
                'access_token' => $tokens['access_token'],
                'refresh_token' => $tokens['refresh_token'],
                'token_maturity_at' => Carbon::now()->addSeconds(900), //token有效期為15分鐘
                'work' => true,
                'status' => 0,
                'created_by' => 999,
                'updated_by' => 999,
            ]);
            return response()->JsonWithCode(["name" => $userinfo['family_name'] . $userinfo['given_name'],"access_token" => $tokens['access_token']], 200);
        } else {
            return response()->JsonWithCode(["msg" => "authenticate fail"], 403);
        }
    }
}
