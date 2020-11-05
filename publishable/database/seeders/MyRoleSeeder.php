<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;


class MyRoleSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        Role::truncate();

        Role::create([
            'id'           => 1,
            'name'         => 'admin',
            'display_name' => '管理員',
            'created_at'   => '2020-10-29 01:35:23',
            'updated_at'   => '2020-10-29 01:35:23',
        ]);

        Role::create([
            'id'           => 2,
            'name'         => 'user',
            'display_name' => '普通用戶',
            'created_at'   => '2020-10-29 01:35:23',
            'updated_at'   => '2020-10-29 01:35:23',
        ]);

        Role::create([
            'id'           => 3,
            'name'         => 'super',
            'display_name' => '最高管理者',
            'created_at'   => '2019-02-11 15:07:28',
            'updated_at'   => '2019-02-11 15:07:28',
        ]);
    }
}
