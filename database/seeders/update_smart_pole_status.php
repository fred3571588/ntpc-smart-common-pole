<?php

namespace Database\Seeders;

use App\Models\SmartPole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class update_smart_pole_status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smart_poles = SmartPole::all();
        foreach ($smart_poles as $smartpole) {
            $smartpole->status = random_int(1,4);
            $smartpole->update();
        }
    }
}
