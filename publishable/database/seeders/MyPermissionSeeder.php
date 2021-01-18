<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class MyPermissionSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        Permission::truncate();

        Permission::create([
            'id' => 1,
            'key' => 'browse_admin',
            'table_name' => NULL
        ]);



        Permission::create([
            'id' => 2,
            'key' => 'browse_bread',
            'table_name' => NULL
        ]);



        Permission::create([
            'id' => 3,
            'key' => 'browse_database',
            'table_name' => NULL
        ]);



        Permission::create([
            'id' => 4,
            'key' => 'browse_media',
            'table_name' => NULL
        ]);



        Permission::create([
            'id' => 5,
            'key' => 'browse_compass',
            'table_name' => NULL
        ]);



        Permission::create([
            'id' => 6,
            'key' => 'browse_menus',
            'table_name' => 'menus'
        ]);



        Permission::create([
            'id' => 7,
            'key' => 'read_menus',
            'table_name' => 'menus'
        ]);



        Permission::create([
            'id' => 8,
            'key' => 'edit_menus',
            'table_name' => 'menus'
        ]);



        Permission::create([
            'id' => 9,
            'key' => 'add_menus',
            'table_name' => 'menus'
        ]);



        Permission::create([
            'id' => 10,
            'key' => 'delete_menus',
            'table_name' => 'menus'
        ]);



        Permission::create([
            'id' => 11,
            'key' => 'browse_roles',
            'table_name' => 'roles'
        ]);



        Permission::create([
            'id' => 12,
            'key' => 'read_roles',
            'table_name' => 'roles'
        ]);



        Permission::create([
            'id' => 13,
            'key' => 'edit_roles',
            'table_name' => 'roles'
        ]);



        Permission::create([
            'id' => 14,
            'key' => 'add_roles',
            'table_name' => 'roles'
        ]);



        Permission::create([
            'id' => 15,
            'key' => 'delete_roles',
            'table_name' => 'roles'
        ]);



        Permission::create([
            'id' => 16,
            'key' => 'browse_users',
            'table_name' => 'users'
        ]);



        Permission::create([
            'id' => 17,
            'key' => 'read_users',
            'table_name' => 'users'
        ]);



        Permission::create([
            'id' => 18,
            'key' => 'edit_users',
            'table_name' => 'users'
        ]);



        Permission::create([
            'id' => 19,
            'key' => 'add_users',
            'table_name' => 'users'
        ]);



        Permission::create([
            'id' => 20,
            'key' => 'delete_users',
            'table_name' => 'users'
        ]);



        Permission::create([
            'id' => 21,
            'key' => 'browse_settings',
            'table_name' => 'settings'
        ]);



        Permission::create([
            'id' => 22,
            'key' => 'read_settings',
            'table_name' => 'settings'
        ]);



        Permission::create([
            'id' => 23,
            'key' => 'edit_settings',
            'table_name' => 'settings'
        ]);



        Permission::create([
            'id' => 24,
            'key' => 'add_settings',
            'table_name' => 'settings'
        ]);



        Permission::create([
            'id' => 25,
            'key' => 'delete_settings',
            'table_name' => 'settings'
        ]);



        Permission::create([
            'id' => 26,
            'key' => 'browse_hooks',
            'table_name' => NULL
        ]);



        Permission::create([
            'id' => 27,
            'key' => 'browse_articles',
            'table_name' => 'articles'
        ]);



        Permission::create([
            'id' => 28,
            'key' => 'read_articles',
            'table_name' => 'articles'
        ]);



        Permission::create([
            'id' => 29,
            'key' => 'edit_articles',
            'table_name' => 'articles'
        ]);



        Permission::create([
            'id' => 30,
            'key' => 'add_articles',
            'table_name' => 'articles'
        ]);



        Permission::create([
            'id' => 31,
            'key' => 'delete_articles',
            'table_name' => 'articles'
        ]);



        Permission::create([
            'id' => 32,
            'key' => 'browse_cgys',
            'table_name' => 'cgys'
        ]);



        Permission::create([
            'id' => 33,
            'key' => 'read_cgys',
            'table_name' => 'cgys'
        ]);



        Permission::create([
            'id' => 34,
            'key' => 'edit_cgys',
            'table_name' => 'cgys'
        ]);



        Permission::create([
            'id' => 35,
            'key' => 'add_cgys',
            'table_name' => 'cgys'
        ]);



        Permission::create([
            'id' => 36,
            'key' => 'delete_cgys',
            'table_name' => 'cgys'
        ]);



        Permission::create([
            'id' => 37,
            'key' => 'browse_comments',
            'table_name' => 'comments'
        ]);



        Permission::create([
            'id' => 38,
            'key' => 'read_comments',
            'table_name' => 'comments'
        ]);



        Permission::create([
            'id' => 39,
            'key' => 'edit_comments',
            'table_name' => 'comments'
        ]);



        Permission::create([
            'id' => 40,
            'key' => 'add_comments',
            'table_name' => 'comments'
        ]);



        Permission::create([
            'id' => 41,
            'key' => 'delete_comments',
            'table_name' => 'comments'
        ]);



        Permission::create([
            'id' => 42,
            'key' => 'browse_contacts',
            'table_name' => 'contacts'
        ]);



        Permission::create([
            'id' => 43,
            'key' => 'read_contacts',
            'table_name' => 'contacts'
        ]);



        Permission::create([
            'id' => 44,
            'key' => 'edit_contacts',
            'table_name' => 'contacts'
        ]);



        Permission::create([
            'id' => 45,
            'key' => 'add_contacts',
            'table_name' => 'contacts'
        ]);



        Permission::create([
            'id' => 46,
            'key' => 'delete_contacts',
            'table_name' => 'contacts'
        ]);



        Permission::create([
            'id' => 47,
            'key' => 'browse_elements',
            'table_name' => 'elements'
        ]);



        Permission::create([
            'id' => 48,
            'key' => 'read_elements',
            'table_name' => 'elements'
        ]);



        Permission::create([
            'id' => 49,
            'key' => 'edit_elements',
            'table_name' => 'elements'
        ]);



        Permission::create([
            'id' => 50,
            'key' => 'add_elements',
            'table_name' => 'elements'
        ]);



        Permission::create([
            'id' => 51,
            'key' => 'delete_elements',
            'table_name' => 'elements'
        ]);



        Permission::create([
            'id' => 52,
            'key' => 'browse_portfolios',
            'table_name' => 'portfolios'
        ]);



        Permission::create([
            'id' => 53,
            'key' => 'read_portfolios',
            'table_name' => 'portfolios'
        ]);



        Permission::create([
            'id' => 54,
            'key' => 'edit_portfolios',
            'table_name' => 'portfolios'
        ]);



        Permission::create([
            'id' => 55,
            'key' => 'add_portfolios',
            'table_name' => 'portfolios'
        ]);



        Permission::create([
            'id' => 56,
            'key' => 'delete_portfolios',
            'table_name' => 'portfolios'
        ]);



        Permission::create([
            'id' => 57,
            'key' => 'browse_partners',
            'table_name' => 'partners'
        ]);



        Permission::create([
            'id' => 58,
            'key' => 'read_partners',
            'table_name' => 'partners'
        ]);



        Permission::create([
            'id' => 59,
            'key' => 'edit_partners',
            'table_name' => 'partners'
        ]);



        Permission::create([
            'id' => 60,
            'key' => 'add_partners',
            'table_name' => 'partners'
        ]);



        Permission::create([
            'id' => 61,
            'key' => 'delete_partners',
            'table_name' => 'partners'
        ]);



        Permission::create([
            'id' => 62,
            'key' => 'browse_serials',
            'table_name' => 'serials'
        ]);



        Permission::create([
            'id' => 63,
            'key' => 'read_serials',
            'table_name' => 'serials'
        ]);



        Permission::create([
            'id' => 64,
            'key' => 'edit_serials',
            'table_name' => 'serials'
        ]);



        Permission::create([
            'id' => 65,
            'key' => 'add_serials',
            'table_name' => 'serials'
        ]);



        Permission::create([
            'id' => 66,
            'key' => 'delete_serials',
            'table_name' => 'serials'
        ]);



        Permission::create([
            'id' => 67,
            'key' => 'browse_tags',
            'table_name' => 'tags'
        ]);



        Permission::create([
            'id' => 68,
            'key' => 'read_tags',
            'table_name' => 'tags'
        ]);



        Permission::create([
            'id' => 69,
            'key' => 'edit_tags',
            'table_name' => 'tags'
        ]);



        Permission::create([
            'id' => 70,
            'key' => 'add_tags',
            'table_name' => 'tags'
        ]);



        Permission::create([
            'id' => 71,
            'key' => 'delete_tags',
            'table_name' => 'tags'
        ]);



        Permission::create([
            'id' => 72,
            'key' => 'browse_orders',
            'table_name' => 'orders'
        ]);



        Permission::create([
            'id' => 73,
            'key' => 'read_orders',
            'table_name' => 'orders'
        ]);



        Permission::create([
            'id' => 74,
            'key' => 'edit_orders',
            'table_name' => 'orders'
        ]);



        Permission::create([
            'id' => 75,
            'key' => 'add_orders',
            'table_name' => 'orders'
        ]);



        Permission::create([
            'id' => 76,
            'key' => 'delete_orders',
            'table_name' => 'orders'
        ]);



        Permission::create([
            'id' => 77,
            'key' => 'browse_consolidations',
            'table_name' => 'consolidations'
        ]);



        Permission::create([
            'id' => 78,
            'key' => 'read_consolidations',
            'table_name' => 'consolidations'
        ]);



        Permission::create([
            'id' => 79,
            'key' => 'edit_consolidations',
            'table_name' => 'consolidations'
        ]);



        Permission::create([
            'id' => 80,
            'key' => 'add_consolidations',
            'table_name' => 'consolidations'
        ]);



        Permission::create([
            'id' => 81,
            'key' => 'delete_consolidations',
            'table_name' => 'consolidations'
        ]);



        Permission::create([
            'id' => 82,
            'key' => 'browse_items',
            'table_name' => 'items'
        ]);



        Permission::create([
            'id' => 83,
            'key' => 'read_items',
            'table_name' => 'items'
        ]);



        Permission::create([
            'id' => 84,
            'key' => 'edit_items',
            'table_name' => 'items'
        ]);



        Permission::create([
            'id' => 85,
            'key' => 'add_items',
            'table_name' => 'items'
        ]);



        Permission::create([
            'id' => 86,
            'key' => 'delete_items',
            'table_name' => 'items'
        ]);


    }
}
