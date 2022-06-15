<?php

namespace Database\Seeders;

use App\Models\SmartPoleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmartPoleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmartPoleType::factory()->count(6)->create();
    }
}
