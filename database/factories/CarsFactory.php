<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cars::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$factory->define(Cars::class, function (Faker $faker) {

            return [
                'name'  => $this->faker->name(),
                'make'  => $this->faker->name(),
                'model' => $this->faker->name()
            ];

        //});
    }
}
