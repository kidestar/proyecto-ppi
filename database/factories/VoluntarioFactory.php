<?php

namespace Database\Factories;

use App\Models\Voluntario;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoluntarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voluntario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->firstName(),
            'Apellidos' => $this->faker->lastName(),
            'FechaNacimiento' => $this->faker->date(),

        ];
    }
}
