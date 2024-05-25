<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contrat;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lettreaccord' => $this->faker->sentence(),
            'etat' => $this->faker->randomNumber(),
            'agessa' => $this->faker->randomNumber(),
            'facture' => $this->faker->randomNumber(),
            'montant' => $this->faker->randomNumber(),
            'montantn' => $this->faker->randomFloat(2, 1, 1000),
            'datepaiement' => $this->faker->date(),
            'numpigiste' => $this->faker->numberBetween(1, 100),
            'nummagazine' => $this->faker->numberBetween(1, 20),
        ];
    }
}
