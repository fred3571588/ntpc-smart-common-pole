<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmartPole>
 */
class SmartPoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'SNSL' => $this->faker->numberBetween(100000, 9999999),
            'district' => $this->faker->randomElement(['板橋區', '三重區', '中和區', '永和區',
            '新莊區', '新店區', '樹林區', '鶯歌區',
            '三峽區', '淡水區', '汐止區', '瑞芳區',
            '土城區', '蘆洲區', '五股區', '泰山區',
            '林口區', '深坑區', '石碇區', '坪林區',
            '三芝區', '石門區', '八里區', '平溪區',
            '雙溪區', '貢寮區', '金山區', '萬里區',
            '烏來區',]),
            'village' => $this->faker->streetName(),
            'road' => $this->faker->streetAddress(),
            'address' => $this->faker->address(),
            'Lat' => $this->faker->latitude(),
            'Lng' => $this->faker->longitude(),
            'affiliated' => '新北市',
            'build_date' => $this->faker->dateTimeBetween('now', '+2 years'),
            'mode' => $this->faker->randomElement(['桿身置換', '新立燈桿']),
            'build_company' => $this->faker->company(),
            'repair_company' => $this->faker->company(),
            'repair_startdate' => $this->faker->dateTimeBetween('now', '+2 years'),
            'repair_enddate' => $this->faker->dateTimeBetween('now', '+3 years'),
            'status' => 1,
            'created_by' => 999,
            'updated_by' => 999,
        ];
    }
}
