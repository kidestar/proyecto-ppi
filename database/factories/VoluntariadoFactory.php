<?php

namespace Database\Factories;

use App\Models\Voluntariado;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoluntariadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voluntariado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'refugio_id' => $this->faker->numberBetween(1,3),
            'voluntario_id' => $this->faker->numberBetween(1,30)
        ];
    }
}
