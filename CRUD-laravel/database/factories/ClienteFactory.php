<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return 
        [
            'nombre' => $this->faker->sentence(2),
            'apellido' => $this->faker->sentence(2),
            'documento' => $this->faker->text(),
            'telefono' => $this->faker->randomElement([2, 4, 8, 15, 30]),
        ];
    }
}
