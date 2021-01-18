<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'mobile' => $this->faker->phoneNumber,
            'subject' => $this->faker->realText(15),
            'message' => $this->faker->realText(50),
            'service' => $this->faker->randomElement(array_keys(json_decode(setting('constant.services'), true))),
            'source' =>
            $this->faker->randomElement(array_keys(json_decode(setting('constant.sources'), true))),
            'status' =>
            $this->faker->randomElement(array_keys(json_decode(setting('constant.contact_statuses'), true))),
        ];
    }
}
