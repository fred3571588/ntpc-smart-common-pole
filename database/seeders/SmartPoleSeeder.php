<?php

namespace Database\Seeders;

use App\Models\SmartPole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmartPoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmartPole::factory()->count(510)->create();
    }
}
