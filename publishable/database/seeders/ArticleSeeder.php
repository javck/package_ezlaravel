<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
use App\Models\Article_Tag;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Tag::truncate();
        Article::truncate();
        $faker = Faker::create('zh_TW');
        for ($i=1 ; $i<=10 ; $i++){
            Article::create([
                'cgy_id' => 1,
                'title' => $faker->realText(20),
                'pic' => 'images/blog-post-'. rand(1,4) .'.jpg',
                'content_small' => $faker->realText(50),
                'content' => $faker->realText(500),
                'author_id' => 1,
                'sort' => $i-1,
                'status' => 'published',
                'featured' => rand(0,1),
                'slug' => 'articles-' . $i
            ]);
        }
    }
}
