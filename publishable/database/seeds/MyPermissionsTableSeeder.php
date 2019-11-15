<?php

use Illuminate\Database\Seeder;

class MyPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-02-11 14:24:41',
                'updated_at' => '2019-02-11 14:24:41',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-02-11 14:24:42',
                'updated_at' => '2019-02-11 14:24:42',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2019-02-11 14:49:57',
                'updated_at' => '2019-02-11 14:49:57',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2019-02-11 14:49:57',
                'updated_at' => '2019-02-11 14:49:57',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2019-02-11 14:49:57',
                'updated_at' => '2019-02-11 14:49:57',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2019-02-11 14:49:57',
                'updated_at' => '2019-02-11 14:49:57',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2019-02-11 14:49:57',
                'updated_at' => '2019-02-11 14:49:57',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_cgys',
                'table_name' => 'cgys',
                'created_at' => '2019-02-11 14:50:46',
                'updated_at' => '2019-02-11 14:50:46',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_cgys',
                'table_name' => 'cgys',
                'created_at' => '2019-02-11 14:50:46',
                'updated_at' => '2019-02-11 14:50:46',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_cgys',
                'table_name' => 'cgys',
                'created_at' => '2019-02-11 14:50:46',
                'updated_at' => '2019-02-11 14:50:46',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_cgys',
                'table_name' => 'cgys',
                'created_at' => '2019-02-11 14:50:46',
                'updated_at' => '2019-02-11 14:50:46',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_cgys',
                'table_name' => 'cgys',
                'created_at' => '2019-02-11 14:50:46',
                'updated_at' => '2019-02-11 14:50:46',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_comments',
                'table_name' => 'comments',
                'created_at' => '2019-02-11 14:52:14',
                'updated_at' => '2019-02-11 14:52:14',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_comments',
                'table_name' => 'comments',
                'created_at' => '2019-02-11 14:52:14',
                'updated_at' => '2019-02-11 14:52:14',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_comments',
                'table_name' => 'comments',
                'created_at' => '2019-02-11 14:52:14',
                'updated_at' => '2019-02-11 14:52:14',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_comments',
                'table_name' => 'comments',
                'created_at' => '2019-02-11 14:52:14',
                'updated_at' => '2019-02-11 14:52:14',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_comments',
                'table_name' => 'comments',
                'created_at' => '2019-02-11 14:52:14',
                'updated_at' => '2019-02-11 14:52:14',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_contacts',
                'table_name' => 'contacts',
                'created_at' => '2019-02-11 14:53:06',
                'updated_at' => '2019-02-11 14:53:06',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_contacts',
                'table_name' => 'contacts',
                'created_at' => '2019-02-11 14:53:06',
                'updated_at' => '2019-02-11 14:53:06',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_contacts',
                'table_name' => 'contacts',
                'created_at' => '2019-02-11 14:53:06',
                'updated_at' => '2019-02-11 14:53:06',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_contacts',
                'table_name' => 'contacts',
                'created_at' => '2019-02-11 14:53:06',
                'updated_at' => '2019-02-11 14:53:06',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_contacts',
                'table_name' => 'contacts',
                'created_at' => '2019-02-11 14:53:06',
                'updated_at' => '2019-02-11 14:53:06',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_elements',
                'table_name' => 'elements',
                'created_at' => '2019-02-11 14:57:08',
                'updated_at' => '2019-02-11 14:57:08',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_elements',
                'table_name' => 'elements',
                'created_at' => '2019-02-11 14:57:08',
                'updated_at' => '2019-02-11 14:57:08',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_elements',
                'table_name' => 'elements',
                'created_at' => '2019-02-11 14:57:08',
                'updated_at' => '2019-02-11 14:57:08',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_elements',
                'table_name' => 'elements',
                'created_at' => '2019-02-11 14:57:08',
                'updated_at' => '2019-02-11 14:57:08',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_elements',
                'table_name' => 'elements',
                'created_at' => '2019-02-11 14:57:08',
                'updated_at' => '2019-02-11 14:57:08',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_medias',
                'table_name' => 'medias',
                'created_at' => '2019-02-11 14:57:58',
                'updated_at' => '2019-02-11 14:57:58',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_medias',
                'table_name' => 'medias',
                'created_at' => '2019-02-11 14:57:58',
                'updated_at' => '2019-02-11 14:57:58',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_medias',
                'table_name' => 'medias',
                'created_at' => '2019-02-11 14:57:58',
                'updated_at' => '2019-02-11 14:57:58',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_medias',
                'table_name' => 'medias',
                'created_at' => '2019-02-11 14:57:58',
                'updated_at' => '2019-02-11 14:57:58',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_medias',
                'table_name' => 'medias',
                'created_at' => '2019-02-11 14:57:58',
                'updated_at' => '2019-02-11 14:57:58',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_partners',
                'table_name' => 'partners',
                'created_at' => '2019-02-11 15:01:08',
                'updated_at' => '2019-02-11 15:01:08',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_partners',
                'table_name' => 'partners',
                'created_at' => '2019-02-11 15:01:08',
                'updated_at' => '2019-02-11 15:01:08',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_partners',
                'table_name' => 'partners',
                'created_at' => '2019-02-11 15:01:08',
                'updated_at' => '2019-02-11 15:01:08',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_partners',
                'table_name' => 'partners',
                'created_at' => '2019-02-11 15:01:08',
                'updated_at' => '2019-02-11 15:01:08',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_partners',
                'table_name' => 'partners',
                'created_at' => '2019-02-11 15:01:08',
                'updated_at' => '2019-02-11 15:01:08',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_serials',
                'table_name' => 'serials',
                'created_at' => '2019-02-11 15:03:26',
                'updated_at' => '2019-02-11 15:03:26',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_serials',
                'table_name' => 'serials',
                'created_at' => '2019-02-11 15:03:26',
                'updated_at' => '2019-02-11 15:03:26',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_serials',
                'table_name' => 'serials',
                'created_at' => '2019-02-11 15:03:26',
                'updated_at' => '2019-02-11 15:03:26',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_serials',
                'table_name' => 'serials',
                'created_at' => '2019-02-11 15:03:26',
                'updated_at' => '2019-02-11 15:03:26',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_serials',
                'table_name' => 'serials',
                'created_at' => '2019-02-11 15:03:26',
                'updated_at' => '2019-02-11 15:03:26',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'browse_tags',
                'table_name' => 'tags',
                'created_at' => '2019-02-11 15:04:01',
                'updated_at' => '2019-02-11 15:04:01',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'read_tags',
                'table_name' => 'tags',
                'created_at' => '2019-02-11 15:04:01',
                'updated_at' => '2019-02-11 15:04:01',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'edit_tags',
                'table_name' => 'tags',
                'created_at' => '2019-02-11 15:04:01',
                'updated_at' => '2019-02-11 15:04:01',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'add_tags',
                'table_name' => 'tags',
                'created_at' => '2019-02-11 15:04:01',
                'updated_at' => '2019-02-11 15:04:01',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'delete_tags',
                'table_name' => 'tags',
                'created_at' => '2019-02-11 15:04:01',
                'updated_at' => '2019-02-11 15:04:01',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2019-02-16 13:38:07',
                'updated_at' => '2019-02-16 13:38:07',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2019-02-16 13:38:07',
                'updated_at' => '2019-02-16 13:38:07',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2019-02-16 13:38:07',
                'updated_at' => '2019-02-16 13:38:07',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2019-02-16 13:38:07',
                'updated_at' => '2019-02-16 13:38:07',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2019-02-16 13:38:07',
                'updated_at' => '2019-02-16 13:38:07',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'browse_consolidations',
                'table_name' => 'consolidations',
                'created_at' => '2019-02-23 06:15:34',
                'updated_at' => '2019-02-23 06:15:34',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'read_consolidations',
                'table_name' => 'consolidations',
                'created_at' => '2019-02-23 06:15:34',
                'updated_at' => '2019-02-23 06:15:34',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'edit_consolidations',
                'table_name' => 'consolidations',
                'created_at' => '2019-02-23 06:15:34',
                'updated_at' => '2019-02-23 06:15:34',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'add_consolidations',
                'table_name' => 'consolidations',
                'created_at' => '2019-02-23 06:15:34',
                'updated_at' => '2019-02-23 06:15:34',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'delete_consolidations',
                'table_name' => 'consolidations',
                'created_at' => '2019-02-23 06:15:34',
                'updated_at' => '2019-02-23 06:15:34',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'browse_items',
                'table_name' => 'items',
                'created_at' => '2019-11-10 18:55:26',
                'updated_at' => '2019-11-10 18:55:26',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'read_items',
                'table_name' => 'items',
                'created_at' => '2019-11-10 18:55:26',
                'updated_at' => '2019-11-10 18:55:26',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'edit_items',
                'table_name' => 'items',
                'created_at' => '2019-11-10 18:55:26',
                'updated_at' => '2019-11-10 18:55:26',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'add_items',
                'table_name' => 'items',
                'created_at' => '2019-11-10 18:55:26',
                'updated_at' => '2019-11-10 18:55:26',
            ),
            85 => 
            array (
                'id' => 86,
                'key' => 'delete_items',
                'table_name' => 'items',
                'created_at' => '2019-11-10 18:55:26',
                'updated_at' => '2019-11-10 18:55:26',
            ),
        ));
        
        
    }
}