<?php

namespace Database\Factories;

use App\Models\Cgy;
use Illuminate\Database\Eloquent\Factories\Factory;

class CgyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cgy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id' => NULL,
            'title' => $this->faker->word,
            'pic' => NULL,
            'desc' => $this->faker->paragraph,
            'enabled' => rand(0,1),
            'sort' => rand(0,20),
            'type' => NULL
        ];
    }
}
