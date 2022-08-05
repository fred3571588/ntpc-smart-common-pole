<?php

namespace Database\Seeders;

use App\Models\SmartPoleType;
use App\Models\SmartPoleTypeAttached;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakeSmartPoleRelation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smartpole_types = SmartPoleType::all();
        $smartpole_type_attacheds = SmartPoleTypeAttached::all();
        foreach ($smartpole_types as $smartpole_type) {
            foreach ($smartpole_type_attacheds as $smartpole_type_attached) {
                $smartpole_type->attached()->save($smartpole_type_attached);
            }
        }
    }
}
