<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cgy_id' => 1,
            'title' => $this->faker->realText(20),
            'pic' =>
            'images/blog-post-' . rand(1, 4) . '.jpg',
            'content_small' => $this->faker->realText(50),
            'content' => $this->faker->realText(500),
            'author_id' => rand(1, 3),
            'sort' => rand(0, 10),
            'status' => $this->faker->randomElement(array('published', 'draft', 'pending')),
            'featured' => rand(0, 1),
            'slug' => 'articles-' . $this->faker->unique()->randomNumber

        ];
    }
}
