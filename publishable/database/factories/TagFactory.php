<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$dateTime = $this->faker->date('Y-m-d') . ' ' . $this->faker->time('H-i-s');
        return [
            'title' => $this->faker->word,
            'type' => $this->faker->randomElement(['shop,def','shop','def']),
            'mode' => NULL,
            'link' => $this->faker->url,
            'sort' => rand(0,20),
            'enabled' => rand(0,1)
            //'created_at' => $dateTime,
            //'updated_at' => $dateTime
        ];
    }
}
