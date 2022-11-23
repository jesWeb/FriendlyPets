<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pet>
 */
class PetFactory extends Factory
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
            'name' => fake()->name(),
            'sexo' => fake()->randomElement(['Mujer','Hombre']),
            'edad' => 3,
            'tamaño' => fake()->name(),
            'raza' => fake()->name()
            //'people_id' => 1,
        ];
    }
}
