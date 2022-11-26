<?php

namespace Database\Factories;

use App\Models\checking;
use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\service_checking>
 */
class Service_checkingFactory extends Factory
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
            'total' =>80,
            // 'serv_id' => service::all()->random()->id,
            // 'check_id' => checking::all()->random()->id,
            
        ];
    }
}
