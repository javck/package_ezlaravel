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
            $table->string('username')->nullable()->unique(); //帳號
            $table->string('nickname', 45)->nullable(); //暱稱
            $table->string('gender', 20)->nullable(); //性別
            $table->string('identify', 20)->nullable(); //身分證字號
            $table->string('title' , 45)->nullable(); //頭銜
            $table->date('birthday')->nullable(); //生日
            $table->string('organization',40)->nullable(); //組織
            $table->string('tel' , 20)->nullable(); //電話
            $table->string('mobile',20)->nullable(); //手機號碼
            $table->string('fb_id' , 60)->nullable()->unique(); //臉書ID
            $table->string('first_name' , 45)->nullable(); //姓
            $table->string('last_name' , 45)->nullable(); //名
            $table->string('pic' , 100)->nullable(); //圖片
            $table->string('post_id' , 5)->nullable(); //郵編
            $table->string('address' , 100)->nullable(); //地址
            $table->string('desc' , 1000)->nullable(); //簡介
            $table->boolean('enabled')->default(true); //是否啟用
            $table->string('socialLinks' , 1000)->nullable(); //社群連結
            $table->string('provider')->nullable(); //登入提供者
            $table->string('provider_id')->nullable();
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
            $table->dropColumn(['username', 'nickname', 'gender','identify','title','birthday','organization','tel','mobile','fb_id','first_name','last_name','pic','post_id','address','desc','enabled','socialLinks','provider','provider_id']);
        });
    }
}
