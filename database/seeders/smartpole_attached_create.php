<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\SmartPole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class smartpole_attached_create extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $smartpoles = SmartPole::all();
        foreach ($smartpoles as $smartpole) {
            for ($i=0; $i < 5; $i++) {
                $smartpole->attached()->create([
                    'isAttach' => true,
                    'attachment' => $faker->randomElement(['照明設備', '路項設備', '環境設備', '顯示設備', '網路設備', '儲能設備','聲音設備','通訊設備','電力設備']),
                    'attach_company' => $faker->company(),
                    'attach_startdate' => $faker->dateTimeBetween('now', '+2 years'),
                    'attach_enddate' => $faker->dateTimeBetween('now', '+3 years'),
                    'status' => 1,
                    'created_by' => 999,
                    'updated_by' => 999,
                ]);
            }
            for ($i=0; $i < 5; $i++) {
                $smartpole->attached()->create([
                    'isAttach' => false,
                    'status' => 1,
                    'created_by' => 999,
                    'updated_by' => 999,
                ]);
            }
        }
    }
}
