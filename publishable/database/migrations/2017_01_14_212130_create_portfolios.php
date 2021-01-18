<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function(Blueprint $table)
        {
            $table->id();
            $table->string('title',40); //標題
            $table->BigInteger('cgy_id')->unsigned()->index(); //分類ID
            $table->foreign('cgy_id')->references('id')->on('cgys')->onDelete('cascade');
            $table->string('pics',500); //圖片
            $table->string('url', 255)->nullable(); //案件網址
            $table->string('detail_title',100); //細節標題
            $table->string("client",50)->nullable(); //客戶姓名
            $table->date("project_date",20)->nullable(); //案件日期
            $table->text("content"); //細節內容
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
        Schema::table('portfolios', function(Blueprint $table)
        {
            $table->dropForeign(['cgy_id']);
        });
        Schema::drop('portfolios');
    }
}
