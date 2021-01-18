<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Portfolio;
use App\Models\Portfolio_Tag;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio_Tag::truncate();
        Portfolio::truncate();

        Portfolio::create([
            'id' => 1,
            'title' => '多媒體1',
            'cgy_id' => 2,
            'pics' => json_encode(["images/portfolio/portfolio-1.jpg", "images/portfolio/portfolio-8.jpg"]),
            'client' => '客戶1',
            'project_date' => '2019-01-01',
            'url' => '#',
            'detail_title' => '多媒體1細節標題',
            'sort' => 0,
            'enabled' => 1,
            'content' => '多媒體1詳細內容'
        ]);



        Portfolio::create([
            'id' => 2,
            'title' => 'PHP語法',
            'cgy_id' => 3,
            'pics' => json_encode(
                ["images/portfolio/portfolio-2.jpg"]
            ),
            'client' => NULL,
            'project_date' => NULL,
            'url' => '#',
            'detail_title' => 'PHP語法細節標題',
            'sort' => 0,
            'enabled' => 1,
            'content' => 'PHP語法細節內容'
        ]);



        Portfolio::create([
            'id' => 3,
            'title' => 'Laravel',
            'cgy_id' => 3,
            'pics' => json_encode(
                ["images/portfolio/portfolio-3.jpg"]
            ),
            'client' => NULL,
            'project_date' => NULL,
            'url' => '#',
            'detail_title' => 'Laravel細節標題',
            'sort' => 0,
            'enabled' => 1,
            'content' => 'Laravel細節內容'
        ]);



        Portfolio::create([
            'id' => 4,
            'title' => 'Laravel2',
            'cgy_id' => 3,
            'pics' => json_encode(
                ["images/portfolio/portfolio-4.jpg"]
            ),
            'client' => NULL,
            'project_date' => NULL,
            'url' => '#',
            'detail_title' => 'Laravel2細節標題',
            'sort' => 1,
            'enabled' => 1,
            'content' => 'Laravel2細節內容'
        ]);



        Portfolio::create([
            'id' => 5,
            'title' => 'Laravel3',
            'cgy_id' => 3,
            'pics' => json_encode(
                ["images/portfolio/portfolio-5.jpg"]
            ),
            'client' => NULL,
            'project_date' => NULL,
            'url' => '#',
            'detail_title' => 'Laravel2細節標題',
            'sort' => 2,
            'enabled' => 1,
            'content' => 'Laravel3細節內容'
        ]);



        Portfolio::create([
            'id' => 6,
            'title' => '多媒體2',
            'cgy_id' => 2,
            'pics' => json_encode(
                ["images/portfolio/portfolio-8.jpg"]
            ),
            'client' => '客戶1',
            'project_date' => '2019-01-01',
            'url' => '#',
            'detail_title' => '多媒體2細節標題',
            'sort' => 2,
            'enabled' => 1,
            'content' => '多媒體2詳細內容'
        ]);

        Portfolio_Tag::create([
            'portfolio_id' => 1,
            'tag_id' => 10
        ]);



        Portfolio_Tag::create([
            'portfolio_id' => 2,
            'tag_id' => 10
        ]);



        Portfolio_Tag::create([
            'portfolio_id' => 3,
            'tag_id' => 11
        ]);



        Portfolio_Tag::create([
            'portfolio_id' => 4,
            'tag_id' => 11
        ]);



        Portfolio_Tag::create([
            'portfolio_id' => 5,
            'tag_id' => 11
        ]);



        Portfolio_Tag::create([
            'portfolio_id' => 6,
            'tag_id' => 10
        ]);
    }
}
