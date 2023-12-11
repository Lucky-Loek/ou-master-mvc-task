<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mark' => $this->faker->randomFloat(1, 1, 10),
            'has_cheated' => false,
            'feedback' => $this->faker->paragraph,
            'user_id' => random_int(1, 100),
            'owl_id' => random_int(1, 9), // There are 9 OWLs
        ];
    }
}
