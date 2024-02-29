<?php

namespace Database\Factories;

use App\Models\Auteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'auteur_id'=> Auteur::all()->random()->id,
            'titre'=>fake()->word(),
            'date_de_publication'=>fake()->date('Y_m_d'),
            'nombre_de_pages'=>fake()->numberBetween(50,600)
        ];
    }
}
