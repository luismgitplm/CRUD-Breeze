<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'codigo' => fake()->regexify('[A-Za-z0-9]{3}'),
            'nombre' => fake()->regexify('[A-Za-z0-9]{30}'),
            'fabricante' => fake()->regexify('[A-Za-z0-9]{30}'),
            'fecha_llegada' => fake()->date(),
            'disponible' => fake()->boolean(),
        ];
    }
}
