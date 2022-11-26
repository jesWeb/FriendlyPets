<?php

namespace Database\Factories;

use App\Models\pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\checking>
 */
class CheckingFactory extends Factory
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
            'fecha' => fake()->sentence(),
            'entrada' => fake()->sentence(),
            'salida' => fake()->sentence(),
            'total' =>80,
            'pet_id' => pet::all()->random()->id,
            
        ];
    }
}
