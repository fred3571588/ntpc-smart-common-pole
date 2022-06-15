<?php

namespace Database\Seeders;

use App\Models\SmartPoleTypeAttached;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmartPoleTypeAttachedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmartPoleTypeAttached::factory()->count(10)->create();
    }
}
