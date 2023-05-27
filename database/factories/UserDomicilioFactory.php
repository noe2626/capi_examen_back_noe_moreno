<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random(),
            'domicilio' => fake()->randomElement(['5 de mayo', 'cosmos', 'orquideas', 'bulevar lazaro cardenas', 'heriberto jara']),
            'numero_exterior' => random_int(10,100),
            'colonia' => fake()->randomElement(['centro', 'laureles', 'carmen', 'vasco', 'ciudad del sol']),
            'cp' => random_int(59300,59400),
            'ciudad' => fake()->randomElement(['La piedad','Zamora', 'Penjamo','Degollado'])
        ];
    }
}
