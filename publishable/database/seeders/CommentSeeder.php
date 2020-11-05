<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Comment;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        $faker = Faker::create('zh_TW');
        $user = User::findOrFail(3);
        for ($i=1 ; $i<=100 ; $i++){
            Comment::create([
                'article_id' => rand(1,10),
                'name' => $user->name,
                'email' => $user->email,
                'website' => null,
                'user_id' => $user->id,
                'content' => $faker->realText(150),
                'sort' => $i-1,
                'enabled' => 1,
                'reply_to' => null
            ]);
        }
    }
}
