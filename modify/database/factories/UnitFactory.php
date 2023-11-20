<?php

namespace Database\Factories;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Unit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $time = now();
        return [

            'user_id' => '1',
            'uuid' => $this->faker->text(7),
            'name' => $this->faker->text(5),
            'status' => '1',
            'created_at' => $time,
            'updated_at' => $time,
            'deleted_at' => null,

        ];
    }
}
