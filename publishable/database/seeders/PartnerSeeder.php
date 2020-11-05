<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::truncate();
        $faker = Faker::create();
        Partner::create([
            'id' => '1',
            'name' => '台積電公司',
            'tel' => $faker->phoneNumber,
            'secret' => 'adkfjdkjfk3jk3jkd8fu873jd',
            'email' => 'company1@demo.com',
            'address' => $faker->address,
            'discount' => 1,
            'sort' => 0
        ]);
        Partner::create([
            'id' => '2',
            'name' => '鴻海公司',
            'tel' => $faker->phoneNumber,
            'secret' => 'ad3311dkjfk3jk3jkd8fu873jddfdf332',
            'email' => 'company2@demo.com',
            'address' => $faker->address,
            'discount' => 1,
            'sort' => 0
        ]);
    }
}
