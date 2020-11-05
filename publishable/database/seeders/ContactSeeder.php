<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Contact;
use App\Models\User;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();

        $faker = Faker::create('zh_TW');

        for ($i = 1; $i <= 20; $i++) {
            Contact::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'mobile' => $faker->phoneNumber,
                'subject' => $faker->realText(15),
                'message' => $faker->realText(50),
                'service' => $faker->randomElement(array_keys(json_decode(setting('constant.services'), true))),
                'source' =>
                $faker->randomElement(array_keys (json_decode(setting('constant.sources'), true) ) ),
                'status' =>
                $faker->randomElement(array_keys(json_decode(setting('constant.contact_statuses'), true))),
            ]);
        }
    }
}
