<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'cgy_id' => rand(1,3),
            'pics' => json_encode(["images/portfolio/portfolio-1.jpg", "images/portfolio/portfolio-8.jpg"]),
            'client' => $this->faker->name,
            'project_date' => $this->faker->date("Y-m-d"),
            'url' => $this->faker->url,
            'detail_title' => $this->faker->sentence(3),
            'sort' => rand(0,20),
            'enabled' => rand(0,1),
            'content' => $this->faker->paragraph
        ];
    }
}
