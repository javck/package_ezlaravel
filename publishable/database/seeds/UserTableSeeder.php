<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;


class UserTableSeeder extends Seeder
{
    public function run()
    {

        User::truncate();
        $faker = Faker::create();
        //加入超級管理者
        User::create(['id' => 1,
                      'username' => 'super',
                      'name' => '超級管理員',
                      'email' => 'admin@demo.com',
                      'password' => bcrypt('GoblinLabSuper1'),
                      'groups' => 'admin',
                      'mobile' => '0911234567']);
        //加入展示管理者
        User::create(['id' => 2,
            'username' => 'demo',
            'name' => '管理員',
            'email' => 'admin2@demo.com',
            'password' => bcrypt('123456'),
            'groups' => 'admin',
            'mobile' => '0921234567']);
        //加入展示用戶
        User::create(['id' => 3,
            'username' => 'test',
            'name' => '王小明',
            'email' => 'ming@demo.com',
            'password' => bcrypt('123456'),
            'groups' => 'user',
            'address' => $faker->address,
            'mobile' => '0911234567']);

        //加入老師1
        User::create(['id' =>4,
            'username' => 'teacher1',
            'name' => '林老師',
            'email' => 'teacher1@demo.com',
            'en_name' => 'Zack',
            'title' => '主任',
            'password' => bcrypt('123456'),
            'groups' => 'teacher,admin',
            'address' => $faker->address,
            'mobile' => '0911234567']);
        //加入老師2
        User::create(['id' =>5,
            'username' => 'teacher2',
            'name' => '王老師',
            'email' => 'teacher2@demo.com',
            'en_name' => 'Jack',
            'title' => '實習老師',
            'password' => bcrypt('123456'),
            'groups' => 'teacher',
            'address' => $faker->address,
            'mobile' => '0911234567']);
        //加入學生1
        User::create(['id' =>6,
            'username' => 'std1',
            'name' => '趙聰明',
            'email' => 'std1@demo.com',
            'en_name' => 'Sam',
            'password' => bcrypt('123456'),
            'groups' => 'student',
            'address' => $faker->address,
            'points' => 3,
            'partner_id' => 1,
            'mobile' => '0911234567']);
        //加入學生2
        User::create(['id' =>7,
            'username' => 'std2',
            'name' => '陳小明',
            'email' => 'std2@demo.com',
            'en_name' => 'Tam',
            'password' => bcrypt('123456'),
            'groups' => 'student',
            'address' => $faker->address,
            'points' => 6,
            'mobile' => '0911234567']);
    }
}
