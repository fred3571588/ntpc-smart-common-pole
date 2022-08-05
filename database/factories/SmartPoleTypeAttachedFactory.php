<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SmartPoleTypeAttachedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'limit_weight' => $this->faker->randomFloat(1, 5, 15),
            'limit_voltage' => $this->faker->numberBetween(100,220),
            'limit_volume' => $this->faker->numberBetween(50,100),
            'status' => 1,
            'created_by' => 999,
            'updated_by' => 999,
        ];
    }
}
