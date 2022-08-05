<?php

namespace Database\Seeders;

use App\Models\SmartPole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class set_smartpole_areaID extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smartpoles = SmartPole::all();
        foreach ($smartpoles as $smartpole) {
            $smartpole->area_id = random_int(1,7);
            $smartpole->save();
        }
    }
}
