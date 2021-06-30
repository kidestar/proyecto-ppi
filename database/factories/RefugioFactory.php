<?php

namespace Database\Factories;

use App\Models\Refugio;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefugioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Refugio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Direccion' => $this->faker->address(),
            'CantidadPerros' => $this->faker->numberBetween(0,50),
        ];
    }
}
