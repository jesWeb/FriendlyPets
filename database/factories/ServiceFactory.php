<?php

namespace Database\Factories;

use App\Models\person;
use App\Models\pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\service>
 */
class ServiceFactory extends Factory
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
            'costo' => 150,
            'descripcion' => fake()->sentence(),
          
            // 'pet_id' => pet::all()->random()->id,
            // 'people_id' => person::all()->random()->id,
        ];
    }
}
