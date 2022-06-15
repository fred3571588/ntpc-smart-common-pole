<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SmartPoleTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F']),
            'shape' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F']),
            'material' => $this->faker->randomElement(['鋼筋','水泥','混擬土','塑膠']),
            'height' => $this->faker->randomFloat(1, 1, 3),
            'weight' => $this->faker->randomFloat(1,250,300),
            'attached_weight' => $this->faker->randomFloat(1,60,100),
            'status' => 1,
            'created_by' => 999,
            'updated_by' => 999,
        ];
    }
}
