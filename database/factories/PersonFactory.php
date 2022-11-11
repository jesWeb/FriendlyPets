<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\person>
 */
class PersonFactory extends Factory
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
            'edad' => 23,
            'direccion' => fake()->sentence(),
            'telefono' => 55,
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->unique()->sentence(), // password
            //'type_user_id' =>1,
        ];
    }
}
