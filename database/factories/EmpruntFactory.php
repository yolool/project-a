<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emprunt>
 */
class EmpruntFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'livre_id'=> Livre::all()->random()->id,
            'date_emprunt'=> fake()->date('Y-m-d'),
            'date_retour'=>fake()->date('Y-m-d')
        ];
    }
}
