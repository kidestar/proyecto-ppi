<?php

namespace Database\Factories;

use App\Models\Perro;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->firstName(),
            'FechaIngreso' => $this->faker->date(),
            'Raza' => 'Mestizo',
            'Edad' => $this->faker->numberBetween(1,15),
            'refugio_id' => $this->faker->numberBetween(7,15),
        ];
    }
}
