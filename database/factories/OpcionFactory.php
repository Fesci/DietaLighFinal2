<?php

namespace Database\Factories;


use App\Models\Opcion;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpcionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'imagen'=>$this->faker->sentence(),
        ];
    }
}
