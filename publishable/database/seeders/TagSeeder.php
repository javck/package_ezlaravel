<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        Tag::create([
            'id' => 2,
            'title' => '熱賣商品',
            'type' => 'shop,def',
            'mode' => NULL,
            'link' => '#',
            'sort' => 0,
            'enabled' => 1,
            'created_at' => '2018-07-08 10:12:57',
            'updated_at' => '2018-09-25 02:43:07'
        ]);

        Tag::create([
            'id' => 3,
            'title' => '推薦商品',
            'type' => 'shop',
            'mode' => NULL,
            'link' => '#',
            'sort' => 0,
            'enabled' => 1,
            'created_at' => '2018-07-08 10:12:57',
            'updated_at' => '2018-07-08 10:12:57'
        ]);

        Tag::create([
            'id' => 7,
            'title' => '商城',
            'type' => 'qna',
            'mode' => NULL,
            'link' => '#',
            'sort' => 1,
            'enabled' => 1,
            'created_at' => '2018-07-08 10:12:57',
            'updated_at' => '2018-07-11 14:44:03'
        ]);

        Tag::create([
            'id' => 8,
            'title' => '費用',
            'type' => 'qna',
            'mode' => NULL,
            'link' => '#',
            'sort' => 2,
            'enabled' => 1,
            'created_at' => '2018-07-08 10:12:57',
            'updated_at' => '2018-07-08 10:12:57'
        ]);

        Tag::create([
            'id' => 9,
            'title' => '其他',
            'type' => 'qna,def',
            'mode' => NULL,
            'link' => '#',
            'sort' => 4,
            'enabled' => 1,
            'created_at' => '2018-07-11 14:44:24',
            'updated_at' => '2018-08-14 01:55:48'
        ]);

        Tag::create([
            'id' => 10,
            'title' => 'PHP',
            'type' => 'def,portfolio',
            'mode' => NULL,
            'link' => '#',
            'sort' => 0,
            'enabled' => 1,
            'created_at' => '2020-11-03 11:30:04',
            'updated_at' => '2020-11-03 11:31:24'
        ]);

        Tag::create([
            'id' => 11,
            'title' => 'Laravel',
            'type' => 'def,portfolio',
            'mode' => NULL,
            'link' => '#',
            'sort' => 1,
            'enabled' => 1,
            'created_at' => '2020-11-03 11:30:15',
            'updated_at' => '2020-11-03 11:31:39'
        ]);

        Tag::create([
            'id' => 12,
            'title' => 'App',
            'type' => 'def',
            'mode' => NULL,
            'link' => '#',
            'sort' => 2,
            'enabled' => 1,
            'created_at' => '2020-11-03 11:30:28',
            'updated_at' => '2020-11-03 11:30:28'
        ]);

        Tag::create([
            'id' => 13,
            'title' => '人工智慧',
            'type' => 'def,portfolio',
            'mode' => NULL,
            'link' => '#',
            'sort' => 3,
            'enabled' => 1,
            'created_at' => '2020-11-03 11:30:41',
            'updated_at' => '2020-11-03 11:31:46'
        ]);

        Tag::create([
            'id' => 14,
            'title' => '資料結構',
            'type' => 'def,portfolio',
            'mode' => NULL,
            'link' => '#',
            'sort' => 4,
            'enabled' => 1,
            'created_at' => '2020-11-03 11:30:55',
            'updated_at' => '2020-11-03 11:32:00'
        ]);
    }
}
