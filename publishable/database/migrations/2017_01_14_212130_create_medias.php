<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title',40); //標題
            $table->integer('cgy_id')->unsigned()->index(); //分類ID
            $table->foreign('cgy_id')->references('id')->on('cgys')->onDelete('cascade');
            $table->string('lang',20)->default('zh_TW'); //語系
            $table->string('pics',500); //圖片
            $table->string('title_link',255)->nullable(); //標題連結
            $table->string("l_link",255)->nullable(); //左邊連結
            $table->string("l_icon",20)->nullable(); //左邊ICON
            $table->string("l_type",20)->nullable(); //左邊類型
            $table->string("r_link",255)->nullable(); //右邊連結
            $table->string("r_icon",20)->nullable(); //右邊ICON
            $table->string("r_type",20)->nullable(); //右邊類型
            $table->integer('sort')->default(0); //排序
            $table->boolean('enabled')->default(true); //是否啟用
            $table->string('subtitle',80)->nullable(); //副標題
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medias', function(Blueprint $table)
        { 
            $table->dropForeign(['cgy_id']);
        });
        Schema::drop('medias');
    }
}
