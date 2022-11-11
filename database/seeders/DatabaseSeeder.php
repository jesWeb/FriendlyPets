<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Type_user::factory(10)->create();
        \App\Models\Person::factory(10)->create();
        \App\Models\Pet::factory(10)->create();
        \App\Models\Checking::factory(10)->create();
        \App\Models\Service::factory(10)->create();
        \App\Models\service_checking::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
