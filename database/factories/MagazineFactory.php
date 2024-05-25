<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Magazine;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Magazine>
 */
class MagazineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bouclage' => $this->faker->date(),
            'sortie' => $this->faker->date(),
            'paiement' => $this->faker->date(),
            'budget' => $this->faker->numerify("###"),
        ];
    }
}
