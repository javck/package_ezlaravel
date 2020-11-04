<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_id')->unsigned()->index();
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->string('name', 40)->nullable(); //姓名
            $table->string('email', 100)->nullable(); //電子郵箱
            $table->string('website', 255)->nullable(); //網址
            $table->unsignedBigInteger('user_id')->index()->nullable(); //使用者
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('content', 800); //內容
            $table->bigInteger('reply_to')->nullable(); //回覆給
            $table->integer('sort')->default(0); //排序
            $table->boolean('enabled')->default(true); //是否啟用
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
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['article_id']);
        });
        Schema::drop('comments');
    }
}
