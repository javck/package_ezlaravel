<?php

namespace Database\Factories;

use App\Models\Element;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Element::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pages = array_keys(json_decode(setting('constant.pages'), true));
        $position = ['slider', 'row1', 'row2', 'row3', 'row4', 'row5'];
        return [
            'updater_id' => NULL,
            'page' => $this->faker->randomElement($pages),
            'mode' => 'imgText',
            'title' => $this->faker->realText(10),
            'position' => $this->faker->randomElement($position),
            'icon' => NULL,
            'subtitle' => $this->faker->realText(20),
            'content' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'url_txt' => NULL,
            'pic' => 'images/service-details-2.jpg',
            'video' => NULL,
            'alt' => NULL,
            'title_pos' => NULL,
            'title_color' => 'black',
            'q_mode' => NULL,
            'i_mode' => NULL,
            'sort' => $this->faker->numberBetween(0, 1000),
            'enabled' => rand(0, 1),
            'isShowTitle' => rand(0, 1),
            'price' => NULL,
            'price2' => NULL,
            'isBestPrice' => 0,
            'priceUnit' => NULL,
            'price2Unit' => NULL,
            'currency' => NULL,
            'animation' => NULL,
            'animationDelay' => NULL
        ];
    }
}
