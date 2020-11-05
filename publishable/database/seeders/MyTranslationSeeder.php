<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Translation;


class MyTranslationSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Translation::truncate();

        Translation::create([
            'id' => 1,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 1,
            'locale' => 'en',
            'value' => '使用者',
            'created_at' => '2019-02-24 03:19:55',
            'updated_at' => '2019-02-24 03:19:55'
        ]);



        Translation::create([
            'id' => 2,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 1,
            'locale' => 'en',
            'value' => '使用者集',
            'created_at' => '2019-02-24 03:19:55',
            'updated_at' => '2019-02-24 03:19:55'
        ]);



        Translation::create([
            'id' => 3,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => 'Article',
            'created_at' => '2019-02-24 05:41:57',
            'updated_at' => '2019-02-24 06:10:25'
        ]);



        Translation::create([
            'id' => 4,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => 'Articles',
            'created_at' => '2019-02-24 05:41:57',
            'updated_at' => '2019-02-24 06:10:25'
        ]);



        Translation::create([
            'id' => 19,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 7,
            'locale' => 'en',
            'value' => '聯絡單',
            'created_at' => '2019-02-26 13:26:58',
            'updated_at' => '2019-02-26 13:26:58'
        ]);



        Translation::create([
            'id' => 20,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 7,
            'locale' => 'en',
            'value' => '聯絡單集',
            'created_at' => '2019-02-26 13:26:58',
            'updated_at' => '2019-02-26 13:26:58'
        ]);



        Translation::create([
            'id' => 21,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 9,
            'locale' => 'en',
            'value' => '多媒體',
            'created_at' => '2019-02-27 13:58:27',
            'updated_at' => '2019-02-27 13:58:27'
        ]);



        Translation::create([
            'id' => 22,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 9,
            'locale' => 'en',
            'value' => '多媒體集',
            'created_at' => '2019-02-27 13:58:27',
            'updated_at' => '2019-02-27 13:58:27'
        ]);



        Translation::create([
            'id' => 23,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 14,
            'locale' => 'en',
            'value' => '留言集',
            'created_at' => '2019-03-17 09:41:38',
            'updated_at' => '2019-03-17 09:41:38'
        ]);



        Translation::create([
            'id' => 24,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 13,
            'locale' => 'en',
            'value' => '訂單',
            'created_at' => '2019-03-19 22:57:58',
            'updated_at' => '2019-03-19 22:57:58'
        ]);



        Translation::create([
            'id' => 25,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 13,
            'locale' => 'en',
            'value' => '訂單集',
            'created_at' => '2019-03-19 22:57:58',
            'updated_at' => '2019-03-19 22:57:58'
        ]);



        Translation::create([
            'id' => 26,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 14,
            'locale' => 'en',
            'value' => '集運單',
            'created_at' => '2019-03-19 23:01:43',
            'updated_at' => '2019-03-19 23:01:43'
        ]);



        Translation::create([
            'id' => 27,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 14,
            'locale' => 'en',
            'value' => '集運單集',
            'created_at' => '2019-03-19 23:01:43',
            'updated_at' => '2019-03-19 23:01:43'
        ]);



        Translation::create([
            'id' => 28,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 8,
            'locale' => 'en',
            'value' => '網頁元素',
            'created_at' => '2019-03-19 23:17:00',
            'updated_at' => '2019-03-19 23:17:00'
        ]);



        Translation::create([
            'id' => 29,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 8,
            'locale' => 'en',
            'value' => '網頁元素集',
            'created_at' => '2019-03-19 23:17:00',
            'updated_at' => '2019-03-19 23:17:00'
        ]);



        Translation::create([
            'id' => 30,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '分類',
            'created_at' => '2019-03-20 04:14:00',
            'updated_at' => '2019-03-20 04:14:00'
        ]);



        Translation::create([
            'id' => 31,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '分類集',
            'created_at' => '2019-03-20 04:14:00',
            'updated_at' => '2019-03-20 04:14:00'
        ]);



        Translation::create([
            'id' => 32,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 1,
            'locale' => 'en',
            'value' => 'dashboard',
            'created_at' => '2019-03-20 10:04:12',
            'updated_at' => '2020-10-29 02:11:44'
        ]);



        Translation::create([
            'id' => 33,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 1,
            'locale' => 'zh_CN',
            'value' => ' 控制面板',
            'created_at' => '2019-03-20 10:04:12',
            'updated_at' => '2019-03-20 10:04:12'
        ]);



        Translation::create([
            'id' => 34,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '角色',
            'created_at' => '2019-03-20 10:04:29',
            'updated_at' => '2019-03-20 10:04:29'
        ]);



        Translation::create([
            'id' => 35,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '角色',
            'created_at' => '2019-03-20 10:04:29',
            'updated_at' => '2019-03-20 10:04:29'
        ]);



        Translation::create([
            'id' => 36,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 1,
            'locale' => 'zh_CN',
            'value' => '使用者',
            'created_at' => '2019-03-20 10:51:07',
            'updated_at' => '2019-03-20 10:51:07'
        ]);



        Translation::create([
            'id' => 37,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 1,
            'locale' => 'zh_CN',
            'value' => '使用者集',
            'created_at' => '2019-03-20 10:51:07',
            'updated_at' => '2019-03-20 10:51:07'
        ]);



        Translation::create([
            'id' => 38,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => 'Article',
            'created_at' => '2019-03-21 10:18:35',
            'updated_at' => '2019-03-21 10:18:35'
        ]);



        Translation::create([
            'id' => 39,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => 'Articles',
            'created_at' => '2019-03-21 10:18:35',
            'updated_at' => '2019-03-21 10:18:35'
        ]);



        Translation::create([
            'id' => 54,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 14,
            'locale' => 'zh_CN',
            'value' => '集運單',
            'created_at' => '2019-03-21 13:38:04',
            'updated_at' => '2019-03-21 13:38:04'
        ]);



        Translation::create([
            'id' => 55,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 14,
            'locale' => 'zh_CN',
            'value' => '集運單集',
            'created_at' => '2019-03-21 13:38:04',
            'updated_at' => '2019-03-21 13:38:04'
        ]);



        Translation::create([
            'id' => 56,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 13,
            'locale' => 'zh_CN',
            'value' => '訂單',
            'created_at' => '2019-03-21 23:27:12',
            'updated_at' => '2019-03-21 23:27:12'
        ]);



        Translation::create([
            'id' => 57,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 13,
            'locale' => 'zh_CN',
            'value' => '訂單集',
            'created_at' => '2019-03-21 23:27:12',
            'updated_at' => '2019-03-21 23:27:12'
        ]);



        Translation::create([
            'id' => 58,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 49,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-22 00:09:37',
            'updated_at' => '2019-03-22 00:09:37'
        ]);



        Translation::create([
            'id' => 59,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 49,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-22 00:09:37',
            'updated_at' => '2019-03-22 00:09:37'
        ]);



        Translation::create([
            'id' => 60,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 50,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-22 00:10:09',
            'updated_at' => '2019-03-22 00:10:09'
        ]);



        Translation::create([
            'id' => 61,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 50,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-22 00:10:09',
            'updated_at' => '2019-03-22 00:10:09'
        ]);



        Translation::create([
            'id' => 62,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 51,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-22 00:10:45',
            'updated_at' => '2019-03-22 00:10:45'
        ]);



        Translation::create([
            'id' => 63,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 51,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-22 00:10:45',
            'updated_at' => '2019-03-22 00:10:45'
        ]);



        Translation::create([
            'id' => 64,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 52,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-22 00:10:59',
            'updated_at' => '2019-03-22 00:10:59'
        ]);



        Translation::create([
            'id' => 65,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 52,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-22 00:10:59',
            'updated_at' => '2019-03-22 00:10:59'
        ]);



        Translation::create([
            'id' => 66,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 53,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-22 00:11:28',
            'updated_at' => '2019-03-22 00:11:28'
        ]);



        Translation::create([
            'id' => 67,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 53,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-22 00:11:28',
            'updated_at' => '2019-03-22 00:11:28'
        ]);



        Translation::create([
            'id' => 68,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 54,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-22 00:11:46',
            'updated_at' => '2019-03-22 00:11:46'
        ]);



        Translation::create([
            'id' => 69,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 54,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-22 00:11:46',
            'updated_at' => '2019-03-22 00:11:46'
        ]);



        Translation::create([
            'id' => 70,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 8,
            'locale' => 'zh_CN',
            'value' => '網頁元素',
            'created_at' => '2019-03-23 05:34:19',
            'updated_at' => '2019-03-23 05:34:19'
        ]);



        Translation::create([
            'id' => 71,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 8,
            'locale' => 'zh_CN',
            'value' => '網頁元素集',
            'created_at' => '2019-03-23 05:34:19',
            'updated_at' => '2019-03-23 05:34:19'
        ]);



        Translation::create([
            'id' => 79,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '分類',
            'created_at' => '2019-03-30 11:44:37',
            'updated_at' => '2019-03-30 11:44:37'
        ]);



        Translation::create([
            'id' => 80,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '分類集',
            'created_at' => '2019-03-30 11:44:37',
            'updated_at' => '2019-03-30 11:44:37'
        ]);



        Translation::create([
            'id' => 81,
            'table_name' => 'articles',
            'column_name' => 'title',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 82,
            'table_name' => 'articles',
            'column_name' => 'title',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 83,
            'table_name' => 'articles',
            'column_name' => 'seo_title',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 84,
            'table_name' => 'articles',
            'column_name' => 'seo_title',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 85,
            'table_name' => 'articles',
            'column_name' => 'content_small',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 86,
            'table_name' => 'articles',
            'column_name' => 'content_small',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 87,
            'table_name' => 'articles',
            'column_name' => 'content',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 88,
            'table_name' => 'articles',
            'column_name' => 'content',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 89,
            'table_name' => 'articles',
            'column_name' => 'slug',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 90,
            'table_name' => 'articles',
            'column_name' => 'slug',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 91,
            'table_name' => 'articles',
            'column_name' => 'meta_description',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 92,
            'table_name' => 'articles',
            'column_name' => 'meta_description',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 93,
            'table_name' => 'articles',
            'column_name' => 'meta_keywords',
            'foreign_key' => 4,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 94,
            'table_name' => 'articles',
            'column_name' => 'meta_keywords',
            'foreign_key' => 4,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 95,
            'table_name' => 'articles',
            'column_name' => 'title',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 96,
            'table_name' => 'articles',
            'column_name' => 'title',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 97,
            'table_name' => 'articles',
            'column_name' => 'seo_title',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 98,
            'table_name' => 'articles',
            'column_name' => 'seo_title',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 99,
            'table_name' => 'articles',
            'column_name' => 'content_small',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 100,
            'table_name' => 'articles',
            'column_name' => 'content_small',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 101,
            'table_name' => 'articles',
            'column_name' => 'content',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 102,
            'table_name' => 'articles',
            'column_name' => 'content',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 103,
            'table_name' => 'articles',
            'column_name' => 'slug',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 104,
            'table_name' => 'articles',
            'column_name' => 'slug',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 105,
            'table_name' => 'articles',
            'column_name' => 'meta_description',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 106,
            'table_name' => 'articles',
            'column_name' => 'meta_description',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 107,
            'table_name' => 'articles',
            'column_name' => 'meta_keywords',
            'foreign_key' => 5,
            'locale' => 'en',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 108,
            'table_name' => 'articles',
            'column_name' => 'meta_keywords',
            'foreign_key' => 5,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-03-31 13:58:02',
            'updated_at' => '2019-03-31 13:58:02'
        ]);



        Translation::create([
            'id' => 109,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 7,
            'locale' => 'zh_CN',
            'value' => '聯絡單',
            'created_at' => '2019-04-02 02:50:22',
            'updated_at' => '2019-04-02 02:50:22'
        ]);



        Translation::create([
            'id' => 110,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 7,
            'locale' => 'zh_CN',
            'value' => '聯絡單集',
            'created_at' => '2019-04-02 02:50:22',
            'updated_at' => '2019-04-02 02:50:22'
        ]);



        Translation::create([
            'id' => 111,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 9,
            'locale' => 'zh_CN',
            'value' => '多媒體',
            'created_at' => '2019-04-02 02:51:48',
            'updated_at' => '2019-04-02 02:51:48'
        ]);



        Translation::create([
            'id' => 112,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 9,
            'locale' => 'zh_CN',
            'value' => '多媒體集',
            'created_at' => '2019-04-02 02:51:48',
            'updated_at' => '2019-04-02 02:51:48'
        ]);



        Translation::create([
            'id' => 113,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 15,
            'locale' => 'en',
            'value' => '聯絡單集',
            'created_at' => '2019-04-02 03:46:04',
            'updated_at' => '2019-04-02 03:46:04'
        ]);



        Translation::create([
            'id' => 114,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 15,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-04-02 03:46:04',
            'updated_at' => '2019-04-02 03:46:04'
        ]);



        Translation::create([
            'id' => 115,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 12,
            'locale' => 'en',
            'value' => '標籤',
            'created_at' => '2019-04-02 03:58:11',
            'updated_at' => '2019-04-02 03:58:11'
        ]);



        Translation::create([
            'id' => 116,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 12,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-04-02 03:58:11',
            'updated_at' => '2019-04-02 03:58:11'
        ]);



        Translation::create([
            'id' => 117,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 12,
            'locale' => 'en',
            'value' => '標籤集',
            'created_at' => '2019-04-02 03:58:11',
            'updated_at' => '2019-04-02 03:58:11'
        ]);



        Translation::create([
            'id' => 118,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 12,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-04-02 03:58:11',
            'updated_at' => '2019-04-02 03:58:11'
        ]);



        Translation::create([
            'id' => 119,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 10,
            'locale' => 'en',
            'value' => '合作夥伴',
            'created_at' => '2019-04-02 04:04:05',
            'updated_at' => '2019-04-02 04:04:05'
        ]);



        Translation::create([
            'id' => 120,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 10,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-04-02 04:04:05',
            'updated_at' => '2019-04-02 04:04:05'
        ]);



        Translation::create([
            'id' => 121,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 10,
            'locale' => 'en',
            'value' => '合作夥伴集',
            'created_at' => '2019-04-02 04:04:05',
            'updated_at' => '2019-04-02 04:04:05'
        ]);



        Translation::create([
            'id' => 122,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 10,
            'locale' => 'zh_CN',
            'value' => '',
            'created_at' => '2019-04-02 04:04:05',
            'updated_at' => '2019-04-02 04:04:05'
        ]);



        Translation::create([
            'id' => 123,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 17,
            'locale' => 'en',
            'value' => 'medias',
            'created_at' => '2020-10-29 02:11:23',
            'updated_at' => '2020-10-29 02:11:23'
        ]);



        Translation::create([
            'id' => 124,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 59,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 125,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 86,
            'locale' => 'en',
            'value' => '合作廠商ID',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 126,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 60,
            'locale' => 'en',
            'value' => '姓名',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 127,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 61,
            'locale' => 'en',
            'value' => '手機號碼',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 128,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 62,
            'locale' => 'en',
            'value' => '主旨',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 129,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 63,
            'locale' => 'en',
            'value' => '模式',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 130,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 64,
            'locale' => 'en',
            'value' => '訊息',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 131,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 65,
            'locale' => 'en',
            'value' => '所需服務',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 132,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 66,
            'locale' => 'en',
            'value' => '電子郵箱',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 133,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 262,
            'locale' => 'en',
            'value' => '聯絡單狀態',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 134,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 293,
            'locale' => 'en',
            'value' => 'Tag',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 135,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 259,
            'locale' => 'en',
            'value' => '處理者',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 136,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 260,
            'locale' => 'en',
            'value' => '建立者ID',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 137,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 74,
            'locale' => 'en',
            'value' => '流量來源',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 138,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 84,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 139,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 85,
            'locale' => 'en',
            'value' => '變更於',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 140,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 190,
            'locale' => 'en',
            'value' => '合作廠商',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 141,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 264,
            'locale' => 'en',
            'value' => '建立者',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 142,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 265,
            'locale' => 'en',
            'value' => '處理者',
            'created_at' => '2020-10-29 14:49:07',
            'updated_at' => '2020-10-29 14:49:07'
        ]);



        Translation::create([
            'id' => 143,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 276,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 144,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 277,
            'locale' => 'en',
            'value' => '分類ID',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 145,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 278,
            'locale' => 'en',
            'value' => '標題',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 146,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 279,
            'locale' => 'en',
            'value' => '圖片',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 147,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 280,
            'locale' => 'en',
            'value' => '原價',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 148,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 281,
            'locale' => 'en',
            'value' => '現價',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 149,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 282,
            'locale' => 'en',
            'value' => '標牌文字',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 150,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 283,
            'locale' => 'en',
            'value' => '評價星等',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 151,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 284,
            'locale' => 'en',
            'value' => '存貨數量',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 152,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 285,
            'locale' => 'en',
            'value' => '描述',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 153,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 286,
            'locale' => 'en',
            'value' => '規格',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 154,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 287,
            'locale' => 'en',
            'value' => 'SKU序號',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 155,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 288,
            'locale' => 'en',
            'value' => '可選項',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 156,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 289,
            'locale' => 'en',
            'value' => '排序',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 157,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 290,
            'locale' => 'en',
            'value' => '是否啟用',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 158,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 291,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 159,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 292,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 160,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 15,
            'locale' => 'en',
            'value' => 'Item',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 161,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 15,
            'locale' => 'en',
            'value' => 'Items',
            'created_at' => '2020-10-29 14:50:14',
            'updated_at' => '2020-10-29 14:50:14'
        ]);



        Translation::create([
            'id' => 162,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 198,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 163,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 199,
            'locale' => 'en',
            'value' => '擁有者',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 164,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 200,
            'locale' => 'en',
            'value' => '收件人',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 165,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 201,
            'locale' => 'en',
            'value' => '收件人抬頭',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 166,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 202,
            'locale' => 'en',
            'value' => '收件人手機',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 167,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 203,
            'locale' => 'en',
            'value' => '收件人Email',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 168,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 204,
            'locale' => 'en',
            'value' => '收件地址',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 169,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 205,
            'locale' => 'en',
            'value' => '訊息',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 170,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 206,
            'locale' => 'en',
            'value' => '優惠序號',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 171,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 207,
            'locale' => 'en',
            'value' => '小計',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 172,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 208,
            'locale' => 'en',
            'value' => '運費',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 173,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 209,
            'locale' => 'en',
            'value' => '狀態',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 174,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 273,
            'locale' => 'en',
            'value' => '付款方式',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 175,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 274,
            'locale' => 'en',
            'value' => '交易序號',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 176,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 247,
            'locale' => 'en',
            'value' => '付款於',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 177,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 248,
            'locale' => 'en',
            'value' => '付款源頭',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 178,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 249,
            'locale' => 'en',
            'value' => '預付金額',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 179,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 250,
            'locale' => 'en',
            'value' => '需補費用',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 180,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 251,
            'locale' => 'en',
            'value' => '說明回覆',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 181,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 272,
            'locale' => 'en',
            'value' => '訂單類型',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 182,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 210,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 183,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 211,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 184,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 214,
            'locale' => 'en',
            'value' => '擁有者',
            'created_at' => '2020-10-29 14:50:47',
            'updated_at' => '2020-10-29 14:50:47'
        ]);



        Translation::create([
            'id' => 185,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 134,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 186,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 135,
            'locale' => 'en',
            'value' => '姓名',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 187,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 136,
            'locale' => 'en',
            'value' => '電話',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 188,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 137,
            'locale' => 'en',
            'value' => '口令',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 189,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 138,
            'locale' => 'en',
            'value' => 'Email',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 190,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 139,
            'locale' => 'en',
            'value' => '網址',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 191,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 140,
            'locale' => 'en',
            'value' => '地址',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 192,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 141,
            'locale' => 'en',
            'value' => '折價',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 193,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 142,
            'locale' => 'en',
            'value' => '排序',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 194,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 143,
            'locale' => 'en',
            'value' => '啟用',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 195,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 144,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 196,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 145,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 14:51:05',
            'updated_at' => '2020-10-29 14:51:05'
        ]);



        Translation::create([
            'id' => 197,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 154,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 198,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 155,
            'locale' => 'en',
            'value' => '標題',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 199,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 156,
            'locale' => 'en',
            'value' => '類型',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 200,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 157,
            'locale' => 'en',
            'value' => 'Mode',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 201,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 158,
            'locale' => 'en',
            'value' => '連結',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 202,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 159,
            'locale' => 'en',
            'value' => '排序',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 203,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 160,
            'locale' => 'en',
            'value' => '啟用',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 204,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 161,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 205,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 162,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 14:54:08',
            'updated_at' => '2020-10-29 14:54:08'
        ]);



        Translation::create([
            'id' => 206,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 146,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 207,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 147,
            'locale' => 'en',
            'value' => '使用者',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 208,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 148,
            'locale' => 'en',
            'value' => '序號',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 209,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 149,
            'locale' => 'en',
            'value' => '優惠模式',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 210,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 150,
            'locale' => 'en',
            'value' => '寄出否',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 211,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 151,
            'locale' => 'en',
            'value' => '使用否',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 212,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 213,
            'locale' => 'en',
            'value' => '類型',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 213,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 152,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 214,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 153,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 215,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 212,
            'locale' => 'en',
            'value' => '使用者',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 216,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 11,
            'locale' => 'en',
            'value' => '序號',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 217,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 11,
            'locale' => 'en',
            'value' => '序號集',
            'created_at' => '2020-10-29 14:55:02',
            'updated_at' => '2020-10-29 14:55:02'
        ]);



        Translation::create([
            'id' => 218,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 38,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 219,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 39,
            'locale' => 'en',
            'value' => '父分類ID',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 220,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 40,
            'locale' => 'en',
            'value' => '標題',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 221,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 41,
            'locale' => 'en',
            'value' => '圖片',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 222,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 42,
            'locale' => 'en',
            'value' => '描述',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 223,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 43,
            'locale' => 'en',
            'value' => '啟用',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 224,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 44,
            'locale' => 'en',
            'value' => '排序',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 225,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 45,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 226,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 46,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 227,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 194,
            'locale' => 'en',
            'value' => '父分類',
            'created_at' => '2020-10-29 14:56:34',
            'updated_at' => '2020-10-29 14:56:34'
        ]);



        Translation::create([
            'id' => 228,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 47,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 229,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 48,
            'locale' => 'en',
            'value' => '文章ID',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 230,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 49,
            'locale' => 'en',
            'value' => '留言者姓名',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 231,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 50,
            'locale' => 'en',
            'value' => '留言者Email',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 232,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 51,
            'locale' => 'en',
            'value' => '留言者網站',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 233,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 52,
            'locale' => 'en',
            'value' => '留言者ID',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 234,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 53,
            'locale' => 'en',
            'value' => '內容',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 235,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 54,
            'locale' => 'en',
            'value' => '回應文章ID',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 236,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 55,
            'locale' => 'en',
            'value' => '排序',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 237,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 56,
            'locale' => 'en',
            'value' => '啟用',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 238,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 57,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 239,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 58,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 240,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 195,
            'locale' => 'en',
            'value' => '留言者',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 241,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 196,
            'locale' => 'en',
            'value' => '文章ID',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 242,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 197,
            'locale' => 'en',
            'value' => '回應文章ID',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 243,
            'table_name' => 'data_types',
            'column_name' => 'display_name_singular',
            'foreign_key' => 6,
            'locale' => 'en',
            'value' => '留言',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 244,
            'table_name' => 'data_types',
            'column_name' => 'display_name_plural',
            'foreign_key' => 6,
            'locale' => 'en',
            'value' => '留言集',
            'created_at' => '2020-10-29 15:00:45',
            'updated_at' => '2020-10-29 15:00:45'
        ]);



        Translation::create([
            'id' => 245,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 297,
            'locale' => 'en',
            'value' => 'Type',
            'created_at' => '2020-10-29 15:10:56',
            'updated_at' => '2020-10-29 15:10:56'
        ]);



        Translation::create([
            'id' => 246,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 117,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 247,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 118,
            'locale' => 'en',
            'value' => '標題',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 248,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 193,
            'locale' => 'en',
            'value' => '分類ID',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 249,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 120,
            'locale' => 'en',
            'value' => '語系',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 250,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 121,
            'locale' => 'en',
            'value' => '圖片',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 251,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 122,
            'locale' => 'en',
            'value' => '標題連結',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 252,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 123,
            'locale' => 'en',
            'value' => '左邊連結',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 253,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 124,
            'locale' => 'en',
            'value' => '左邊ICON',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 254,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 125,
            'locale' => 'en',
            'value' => '左邊類型',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 255,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 126,
            'locale' => 'en',
            'value' => '右邊連結',
            'created_at' => '2020-10-29 15:13:55',
            'updated_at' => '2020-10-29 15:13:55'
        ]);



        Translation::create([
            'id' => 256,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 127,
            'locale' => 'en',
            'value' => '右邊ICON',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 257,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 128,
            'locale' => 'en',
            'value' => '右邊類型',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 258,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 129,
            'locale' => 'en',
            'value' => '排序',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 259,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 130,
            'locale' => 'en',
            'value' => '啟用',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 260,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 131,
            'locale' => 'en',
            'value' => '副標題',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 261,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 132,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 262,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 133,
            'locale' => 'en',
            'value' => '更新於',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 263,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 192,
            'locale' => 'en',
            'value' => '分類ID',
            'created_at' => '2020-10-29 15:13:56',
            'updated_at' => '2020-10-29 15:13:56'
        ]);



        Translation::create([
            'id' => 264,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 23,
            'locale' => 'en',
            'value' => 'ID',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 265,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 187,
            'locale' => 'en',
            'value' => '文章分類',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 266,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 188,
            'locale' => 'en',
            'value' => '語系',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 267,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 26,
            'locale' => 'en',
            'value' => '標題',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 268,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 27,
            'locale' => 'en',
            'value' => '媒體資料',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 269,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 28,
            'locale' => 'en',
            'value' => '模式',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 270,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 189,
            'locale' => 'en',
            'value' => '作者',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 271,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 30,
            'locale' => 'en',
            'value' => '短文',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 272,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 31,
            'locale' => 'en',
            'value' => '全文',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 273,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 32,
            'locale' => 'en',
            'value' => '附件名稱',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 274,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 33,
            'locale' => 'en',
            'value' => '附件路徑',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 275,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 34,
            'locale' => 'en',
            'value' => '排序',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 276,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 257,
            'locale' => 'en',
            'value' => '上架狀態',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 277,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 252,
            'locale' => 'en',
            'value' => '設為精華',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 278,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 253,
            'locale' => 'en',
            'value' => 'Meta 描述',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 279,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 254,
            'locale' => 'en',
            'value' => 'Meta 關鍵字',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 280,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 255,
            'locale' => 'en',
            'value' => 'SEO 標題',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 281,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 258,
            'locale' => 'en',
            'value' => 'URL別名',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 282,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 268,
            'locale' => 'en',
            'value' => '文章圖片',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 283,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 36,
            'locale' => 'en',
            'value' => '創建於',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 284,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 37,
            'locale' => 'en',
            'value' => '變更於',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 285,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 266,
            'locale' => 'en',
            'value' => '作者',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 286,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 267,
            'locale' => 'en',
            'value' => '文章分類',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 287,
            'table_name' => 'data_rows',
            'column_name' => 'display_name',
            'foreign_key' => 269,
            'locale' => 'en',
            'value' => '標籤',
            'created_at' => '2020-10-29 15:15:30',
            'updated_at' => '2020-10-29 15:15:30'
        ]);



        Translation::create([
            'id' => 288,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 16,
            'locale' => 'en',
            'value' => '網頁元素集',
            'created_at' => '2020-10-31 14:14:35',
            'updated_at' => '2020-10-31 14:14:35'
        ]);



        Translation::create([
            'id' => 289,
            'table_name' => 'menu_items',
            'column_name' => 'title',
            'foreign_key' => 118,
            'locale' => 'en',
            'value' => '網店相關',
            'created_at' => '2020-10-31 14:15:03',
            'updated_at' => '2020-10-31 14:15:03'
        ]);
    }
}
