<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'announcement_at' => now(),
            'place' => "A",
            'content' => $this->faker->sentence,
            'memo' => $this->faker->sentence,
            'status' => $this->faker->randomNumber(6),
            'created_by' => $this->faker->randomNumber(5),
            'updated_by' => $this->faker->randomNumber(5),
        ];
    }
}
