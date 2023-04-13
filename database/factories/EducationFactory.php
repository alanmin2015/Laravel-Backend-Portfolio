<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'university' => $this->faker->word,
            'degree' => $this->faker->word,
            'program' => $this->faker->word,
            'finished_at'=>$this->faker->dateTimeThisMonth,
        ];
    }
}
