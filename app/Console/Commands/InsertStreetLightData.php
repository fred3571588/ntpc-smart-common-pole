<?php

namespace App\Console\Commands;

use App\Models\StreetLight;
use Illuminate\Console\Command;

class InsertStreetLightData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'InsertStreetLight';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert StreetLight data from ntpc';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $endpoint = "https://data.ntpc.gov.tw/api/datasets/39149FE0-85AB-4E6C-99E5-60657D44895F/json";
        $client = new \GuzzleHttp\Client();
        $page = 0;
        $size = 0;
        while ($page <= 999999) {
            $response = $client->request('GET', $endpoint, ['query' => [
                'page' => $page,
            ]]);

            // url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

            $statusCode = $response->getStatusCode();
            // $content = $response->getBody();

            // or when your server returns json
            $content = json_decode($response->getBody(), true);
            if ($statusCode == 200 && $content) {
                foreach ($content as $data) {
                    StreetLight::create([
                        'district' => $data['district'],
                        'no' => $data['no'],
                        'oldNo' => $data['oldNo'],
                        'address' => $data['address'],
                        'power' => $data['power'],
                        'TWD97X' => $data['TWD97X'],
                        'TWD97Y' => $data['TWD97Y'],
                    ]);
                }
                $page ++;
            } else {
                break;
            };
        }
    }
}
