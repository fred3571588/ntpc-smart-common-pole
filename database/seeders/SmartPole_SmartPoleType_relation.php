<?php

namespace Database\Seeders;

use App\Models\SmartPole;
use App\Models\SmartPoleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmartPole_SmartPoleType_relation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smartpoles = SmartPole::all();
        foreach ($smartpoles as $smartpole){
            $smartpole_type = SmartPoleType::inRandomOrder()->first();
            $smartpole->smart_pole_type()->associate($smartpole_type);
            $smartpole->save();
        }
    }
}
