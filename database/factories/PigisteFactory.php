<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pigiste;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pigiste>
 */
class PigisteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastname(),
            'prenom' => $this->faker->firstname(),
            'adresse' => $this->faker->streetAddress(),
            'cp' => $this->faker->postcode(),
            'ville' => $this->faker->unique()->city(),
            'mail' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'securitesociale' => $this->faker->numerify('##########'),
            'contratcadre' => $this->faker->numerify('cc-###'),
        ];
    }
}
