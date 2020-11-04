<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $faker = Faker::create();
        for ($i=1 ; $i<=100 ; $i++){
            Article::create([
                'cgy_id' => rand(28,45),
                'title' => $faker->word,
                'mediums' => 'articles/March2019/0s8XrgNR5sN7OdRkYTa4.jpeg',
                'image' => 'articles/March2019/0s8XrgNR5sN7OdRkYTa4.jpeg',
                'mode' => 'singleImg',
                'content_small' => $faker->sentence,
                'content' => $faker->paragraph,
                'author_id' => 1,
                'sort' => $i-1,
                'status' => 'published',
                'featured' => 0,
                'slug' => 'articles-' . $i
            ]);
        }

        // //作業
        // Article::create([
        //     'id' => 11,
        //     'cgy' => 'homework',
        //     'title' => $faker->word,
        //     'mediums' => 'upload/0qpta4f2walc.jpg',
        //     'mode' => 'singleImg',
        //     'content_small' => $faker->sentence,
        //     'content' => $faker->paragraph,
        //     'author' => 4,
        //     'sort' => 0,
        // ]);
        // Article::create([
        //     'id' => 12,
        //     'cgy' => 'homework',
        //     'title' => $faker->word,
        //     'mediums' => 'upload/3h7ahe0sfyvj.jpg',
        //     'mode' => 'singleImg',
        //     'content_small' => $faker->sentence,
        //     'content' => $faker->paragraph,
        //     'author' => 4,
        //     'sort' => 0,
        // ]);
        // //參考文章
        // Article::create([
        //     'id' => 13,
        //     'cgy' => 'reference',
        //     'title' => $faker->word,
        //     'mediums' => 'upload/58w53ehp8mxi.jpg',
        //     'mode' => 'singleImg',
        //     'content_small' => $faker->sentence,
        //     'content' => $faker->paragraph,
        //     'author' => 4,
        //     'sort' => 0,
        // ]);
        // Article::create([
        //     'id' => 14,
        //     'cgy' => 'reference',
        //     'title' => $faker->word,
        //     'mediums' => 'upload/nhh67mh83h4b.jpg',
        //     'mode' => 'singleImg',
        //     'content_small' => $faker->sentence,
        //     'content' => $faker->paragraph,
        //     'author' => 4,
        //     'sort' => 0,
        // ]);
        // Article::create([
        //     'id' => 15,
        //     'cgy' => 'reference',
        //     'title' => $faker->word,
        //     'mediums' => 'upload/nhh67mh83h4b.jpg',
        //     'mode' => 'singleImg',
        //     'content_small' => $faker->sentence,
        //     'content' => $faker->paragraph,
        //     'author' => 4,
        //     'sort' => 0,
        // ]);
        // //翻譯文章
        // Article::create([
        //     'id' => 16,
        //     'cgy' => 'translate',
        //     'title' => $faker->word,
        //     'mediums' => 'upload/q32qhm6tku12.jpg',
        //     'mode' => 'singleImg',
        //     'content_small' => $faker->sentence,
        //     'content' => $faker->paragraph,
        //     'author' => 4,
        //     'sort' => 0,
        // ]);
        // Article::create([
        //     'id' => 17,
        //     'cgy' => 'translate',
        //     'title' => $faker->word,
        //     'mediums' => 'upload/q32qhm6tku12.jpg',
        //     'mode' => 'singleImg',
        //     'content_small' => $faker->sentence,
        //     'content' => $faker->paragraph,
        //     'author' => 4,
        //     'sort' => 0,
        // ]);
    }
}
