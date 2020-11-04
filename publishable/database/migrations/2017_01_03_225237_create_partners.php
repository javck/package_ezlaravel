<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function(Blueprint $table)
        {
            $table->id();
            $table->string('name',40); //姓名
            $table->string('tel',40)->nullable(); //電話
            $table->string('secret',40); //口令
            $table->string('email',100)->nullable(); //電子郵箱
            $table->string('website',100)->nullable(); //網址
            $table->string('address',100)->nullable(); //地址
            $table->double('discount')->default(1); //折價
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
        Schema::drop('partners');
    }
}
