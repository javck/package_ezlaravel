<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cgy_id')->unsigned()->index(); //文章分類
            $table->foreign('cgy_id')->references('id')->on('cgys')->onDelete('cascade');
            $table->string('locale', 10)->default('zh_TW'); //語系
            $table->string('title', 40); //標題
            $table->string('mediums', 400)->nullable(); //媒體連結，現只給網址使用
            $table->string('mode', 20); //模式
            $table->unsignedBigInteger('author_id')->index(); //作者
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('content_small', 80)->nullable(); //部分內容
            $table->text('content'); //內容
            $table->string('attachment_names', 200)->nullable(); //附件檔名
            $table->string('attachment_paths', 500)->nullable(); //附件路徑
            $table->integer('sort')->default(0); //排序
            $table->string('status', 30)->default('pending'); //狀態
            $table->boolean('featured')->default(false); //是否精選
            $table->string('meta_description', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('images', 1000)->nullable(); //圖片
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
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['cgy_id']);
        });
        Schema::drop('articles');
    }
}
