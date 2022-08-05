<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\SmartPoleAttached;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachedDevice_insert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $smart_pole_attacheds = SmartPoleAttached::where('isAttach',true)->get();
        foreach ($smart_pole_attacheds as $smart_pole_attached) {
            $smart_pole_attached->device()->create([
                'name' => $smart_pole_attached->attachment . $faker->randomElement(['A','B','C','D','E','F']),
                'type' => $smart_pole_attached->attachment,
                'company' => $faker->company(),
                'model' => $faker->bothify('?????-#####'),
                'weight' => $faker->numberBetween(1,10),
                'wattage' => $faker->numberBetween(70,220),
                'status' => 1,
                'created_by' => 999,
                'updated_by' => 999,
            ]);
        }
    }
}
