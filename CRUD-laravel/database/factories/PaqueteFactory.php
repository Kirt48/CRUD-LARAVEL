<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paquete>
 */
class PaqueteFactory extends Factory
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
            'destino' => $this->faker->text(),
            'descripcion' => $this->faker->text(),
            'lugarEncuentro' => $this->faker->text(),
            'fechaPartida' => $this->faker->date(),
            'fechaRegreso' => $this->faker->date(),
            'cupos' => $this->faker->randomNumber(),
            'precioAdulto' => $this->faker->numberBetween(5, 100),
            'precioNino' => $this->faker->numberBetween(5, 100),       
        ];
    }
}
