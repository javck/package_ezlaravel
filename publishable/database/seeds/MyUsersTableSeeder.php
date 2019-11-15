<?php

use Illuminate\Database\Seeder;

class MyUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 3,
                'name' => '超級管理員',
                'email' => 'admin@demo.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DMNUoJqwSmfDUhQ//79xJ.qVdxO3uQPc8.yZW/8Fc0KbfyBDQdXUG',
                'remember_token' => '2HXuoWQXldQo1pb4evaZyBIMAIKNWwg2QBe22nage97kboyAfqKju0uifVkg',
                'settings' => '{"locale":"zh_TW"}',
                'created_at' => '2018-12-30 19:31:03',
                'updated_at' => '2019-06-23 06:28:33',
                'partner_id' => NULL,
                'username' => 'super',
                'nickname' => NULL,
                'gender' => NULL,
                'identify' => NULL,
                'title' => NULL,
                'birthday' => NULL,
                'organization' => NULL,
                'tel' => NULL,
                'mobile' => '0911234567',
                'fb_id' => NULL,
                'first_name' => NULL,
                'last_name' => NULL,
                'pic' => NULL,
                'post_id' => NULL,
                'address' => NULL,
                'desc' => NULL,
                'enabled' => 1,
                'socialLinks' => NULL,
                'provider' => NULL,
                'provider_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => '管理員',
                'email' => 'admin2@demo.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2qIlj63pOpQkGXg9wJ8M3upCKlcrAEzuaal87PGpEvlHzQjAkM8zq',
                'remember_token' => 'pxClU8SEIC1eEmkj66tiWCrAc3eiYs2hP0wrguMPmYuHIQOJfDRUFZ1pNwyv',
                'settings' => '{"locale":"zh_TW"}',
                'created_at' => '2018-12-30 19:31:04',
                'updated_at' => '2019-07-31 09:18:20',
                'partner_id' => NULL,
                'username' => 'admin',
                'nickname' => 'ddddd',
                'gender' => NULL,
                'identify' => NULL,
                'title' => NULL,
                'birthday' => NULL,
                'organization' => NULL,
                'tel' => NULL,
                'mobile' => '0921234567',
                'fb_id' => NULL,
                'first_name' => NULL,
                'last_name' => NULL,
                'pic' => NULL,
                'post_id' => NULL,
                'address' => NULL,
                'desc' => NULL,
                'enabled' => 1,
                'socialLinks' => NULL,
                'provider' => NULL,
                'provider_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => '王小明',
                'email' => 'ming@demo.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x6VfoOu2AE2Z7nPjgyntvO9LYF1OkwzdMLRytG24tde2iPnRkDUf.',
                'remember_token' => '2fqQt3WeuTo4qGlBO5XaNLEFQlQtMYRujZzE3ENBshMausvZYXetvahbH9eP',
                'settings' => '{"locale":"zh_TW"}',
                'created_at' => '2018-12-30 19:31:04',
                'updated_at' => '2019-03-20 18:23:09',
                'partner_id' => NULL,
                'username' => 'user',
                'nickname' => NULL,
                'gender' => NULL,
                'identify' => NULL,
                'title' => NULL,
                'birthday' => NULL,
                'organization' => NULL,
                'tel' => NULL,
                'mobile' => '0911234567',
                'fb_id' => NULL,
                'first_name' => NULL,
                'last_name' => NULL,
                'pic' => NULL,
                'post_id' => NULL,
                'address' => '56898 Cynthia StreamDorthyville, MS 71126',
                'desc' => NULL,
                'enabled' => 1,
                'socialLinks' => NULL,
                'provider' => NULL,
                'provider_id' => NULL,
            ),
        ));
        
        
    }
}