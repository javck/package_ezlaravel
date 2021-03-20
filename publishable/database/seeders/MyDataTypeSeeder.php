<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataType;

class MyDataTypeSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DataType::truncate();

        DataType::create([
            'id'                    => 1,
            'name'                  => 'users',
            'slug'                  => 'users',
            'display_name_singular' => '使用者',
            'display_name_plural'   => '使用者集',
            'icon'                  => 'voyager-person',
            'model_name'            => 'App\\Models\\User',
            'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerUserController',
            'description'           => '使用者表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{
 "order_column":"name",
 "order_display_column":"name",
 "order_direction":"asc",
 "default_search_key":null,
 "scope":null
}',
            'created_at'            => '2019-02-11 06:24:41',
            'updated_at'            => '2020-11-04 21:54:57',
        ]);

        DataType::create([
            'id'                    => 2,
            'name'                  => 'menus',
            'slug'                  => 'menus',
            'display_name_singular' => '側邊欄',
            'display_name_plural'   => '側邊欄',
            'icon'                  => 'voyager-list',
            'model_name'            => 'TCG\\Voyager\\Models\\Menu',
            'policy_name'           => null,
            'controller'            => '',
            'description'           => '',
            'generate_permissions'  => 1,
            'server_side'           => 0,
            'details'               => null,
            'created_at'            => '2019-02-11 06:24:41',
            'updated_at'            => '2019-02-11 06:24:41',
        ]);

        DataType::create([
            'id'                    => 3,
            'name'                  => 'roles',
            'slug'                  => 'roles',
            'display_name_singular' => '角色',
            'display_name_plural'   => '角色',
            'icon'                  => 'voyager-lock',
            'model_name'            => 'TCG\\Voyager\\Models\\Role',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerRoleController',
            'description'           => '',
            'generate_permissions'  => 1,
            'server_side'           => 0,
            'details'               => null,
            'created_at'            => '2019-02-11 06:24:41',
            'updated_at'            => '2019-02-11 06:24:41',
        ]);

        DataType::create([
            'id'                    => 4,
            'name'                  => 'articles',
            'slug'                  => 'articles',
            'display_name_singular' => '文章',
            'display_name_plural'   => '文章集',
            'icon'                  => 'voyager-file-text',
            'model_name'            => 'App\\Models\\Article',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerArticleController',
            'description'           => '文章表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{
 "order_column":"sort",
 "order_display_column":"title",
 "order_direction":"asc",
 "default_search_key":null,
 "scope":null
}',
            'created_at'            => '2019-02-11 06:49:57',
            'updated_at'            => '2020-11-03 13:37:30',
        ]);

        DataType::create([
            'id'                    => 5,
            'name'                  => 'cgys',
            'slug'                  => 'cgys',
            'display_name_singular' => '分類',
            'display_name_plural'   => '分類集',
            'icon'                  => 'voyager-categories',
            'model_name'            => 'App\\Models\\Cgy',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerCgyController',
            'description'           => '分類表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":"sort","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-02-11 06:50:46',
            'updated_at'            => '2020-11-04 21:57:31',
        ]);

        DataType::create([
            'id'                    => 6,
            'name'                  => 'comments',
            'slug'                  => 'comments',
            'display_name_singular' => '留言',
            'display_name_plural'   => '留言集',
            'icon'                  => 'voyager-bubble',
            'model_name'            => 'App\\Models\\Comment',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerCommentController',
            'description'           => '留言表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-02-11 06:52:14',
            'updated_at'            => '2020-10-29 15:00:45',
        ]);

        DataType::create([
            'id'                    => 7,
            'name'                  => 'contacts',
            'slug'                  => 'contacts',
            'display_name_singular' => '聯絡單',
            'display_name_plural'   => '聯絡單集',
            'icon'                  => 'voyager-mail',
            'model_name'            => 'App\\Models\\Contact',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerContactController',
            'description'           => '聯絡單表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":"created_at","order_display_column":"created_at","order_direction":"desc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-02-11 06:53:06',
            'updated_at'            => '2020-11-04 22:00:13',
        ]);

        DataType::create([
            'id'                    => 8,
            'name'                  => 'elements',
            'slug'                  => 'elements',
            'display_name_singular' => '網頁元素',
            'display_name_plural'   => '網頁元素集',
            'icon'                  => 'voyager-puzzle',
            'model_name'            => 'App\\Models\\Element',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerElementController',
            'description'           => '網頁元素表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":"sort","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-02-11 06:57:08',
            'updated_at'            => '2020-11-01 18:53:52',
        ]);

        DataType::create([
            'id'                    => 9,
            'name'                  => 'portfolios',
            'slug'                  => 'portfolios',
            'display_name_singular' => '作品',
            'display_name_plural'   => '作品集',
            'icon'                  => 'voyager-photos',
            'model_name'            => 'App\\Models\\Portfolio',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerPortfolioController',
            'description'           => '作品集表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":"sort","order_display_column":"title","order_direction":"asc","default_search_key":"sort","scope":null}',
            'created_at'            => '2019-02-11 06:57:58',
            'updated_at'            => '2020-11-03 12:11:50',
        ]);

        DataType::create([
            'id'                    => 10,
            'name'                  => 'partners',
            'slug'                  => 'partners',
            'display_name_singular' => '合作夥伴',
            'display_name_plural'   => '合作夥伴集',
            'icon'                  => 'voyager-trophy',
            'model_name'            => 'App\\Models\\Partner',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerPartnerController',
            'description'           => '合作夥伴表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":"sort","order_display_column":"name","order_direction":"asc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-02-11 07:01:08',
            'updated_at'            => '2020-10-29 15:01:51',
        ]);

        DataType::create([
            'id'                    => 11,
            'name'                  => 'serials',
            'slug'                  => 'serials',
            'display_name_singular' => '序號',
            'display_name_plural'   => '序號集',
            'icon'                  => 'voyager-gift',
            'model_name'            => 'App\\Models\\Serial',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerSerialController',
            'description'           => '序號表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-02-11 07:03:26',
            'updated_at'            => '2020-10-29 14:55:02',
        ]);

        DataType::create([
            'id'                    => 12,
            'name'                  => 'tags',
            'slug'                  => 'tags',
            'display_name_singular' => '標籤',
            'display_name_plural'   => '標籤集',
            'icon'                  => 'voyager-tag',
            'model_name'            => 'App\\Models\\Tag',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerTagController',
            'description'           => '標籤表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":"sort","order_display_column":"title","order_direction":"asc","default_search_key":"sort","scope":null}',
            'created_at'            => '2019-02-11 07:04:01',
            'updated_at'            => '2020-10-29 14:54:08',
        ]);

        DataType::create([
            'id'                    => 13,
            'name'                  => 'orders',
            'slug'                  => 'orders',
            'display_name_singular' => '訂單',
            'display_name_plural'   => '訂單集',
            'icon'                  => 'voyager-bag',
            'model_name'            => 'App\\Models\\Order',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerOrderController',
            'description'           => '訂單表格',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-02-16 05:38:07',
            'updated_at'            => '2020-10-29 14:50:47',
        ]);

        DataType::create([
            'id'                    => 15,
            'name'                  => 'items',
            'slug'                  => 'items',
            'display_name_singular' => '商品',
            'display_name_plural'   => '商品集',
            'icon'                  => null,
            'model_name'            => 'App\\Models\\Item',
            'policy_name'           => null,
            'controller'            => '\\App\\Http\\Controllers\\Voyager\\VoyagerItemController',
            'description'           => null,
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'details'               => '{"order_column":"sort","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
            'created_at'            => '2019-08-14 05:23:36',
            'updated_at'            => '2020-10-29 14:50:14',
        ]);
    }
}
