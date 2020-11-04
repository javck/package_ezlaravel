<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCgysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgys', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('parent_id')->nullable()->unsigned()->index(); //父分類
            $table->foreign('parent_id')->references('id')->on('cgys')->onDelete('cascade');
            $table->string('title',100); //分類名稱
            $table->string('pic',255)->nullable(); //分類圖片
            $table->string('desc',500)->nullable(); //分類描述
            $table->boolean('enabled')->default(true);//是否啟動
            $table->integer('sort'); //排序
            $table->string('type',30)->nullable(); //類型
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
        Schema::table('cgys', function(Blueprint $table)
        {
            $table->dropForeign(['parent_id']);
        });
        Schema::dropIfExists('cgys');
    }
}
