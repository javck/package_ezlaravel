<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable()->unique();
            $table->string('nickname', 45)->nullable();
            $table->string('gender', 20)->nullable();        
            $table->string('identify', 20)->nullable();
            $table->string('title' , 45)->nullable();
            $table->date('birthday')->nullable();
            $table->string('organization',40)->nullable();
            $table->string('tel' , 20)->nullable();
            $table->string('mobile',20)->nullable();
            $table->string('fb_id' , 60)->nullable()->unique();
            $table->string('first_name' , 45)->nullable();
            $table->string('last_name' , 45)->nullable();
            $table->string('pic' , 100)->nullable();
            $table->string('post_id' , 5)->nullable();
            $table->string('address' , 100)->nullable();
            $table->string('desc' , 1000)->nullable();
            $table->boolean('enabled')->default(true);
            $table->string('socialLinks' , 1000)->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            //2019/02/26因導入Voyager而新增
            $table->string('avatar',191)->default('user/default.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'nickname', 'gender','identify','title','birthday','organization','tel','mobile','fb_id','first_name','last_name','pic','post_id','address','desc','enabled','socialLinks','provider','provider_id','avatar']);
        });
    }
}
