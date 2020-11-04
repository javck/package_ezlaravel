<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('partner_id')->unsigned()->index()->nullable(); //合作廠商
            $table->foreign('partner_id')->references('id')->on('partners');
            $table->string('name', 20); //姓名
            $table->string('mobile', 20)->nullable(); //手機號碼
            $table->string('subject', 100); //主旨
            $table->string('mode', 20)->nullable(); //模式
            $table->string('message', 500)->nullable(); //訊息
            $table->string('service', 40)->nullable(); //所需服務
            $table->string('email', 100)->nullable(); //電子郵箱
            $table->string('status', 20)->default('unHandled'); //聯絡單狀態
            $table->string('tag', 100)->nullable(); //標籤
            $table->unsignedBigInteger('handler_id')->index()->nullable(); //處理者
            $table->foreign('handler_id')->references('id')->on('users');
            $table->unsignedBigInteger('creator_id')->index()->nullable(); //建立者
            $table->foreign('creator_id')->references('id')->on('users');
            $table->string('source', 20)->nullable(); //流量來源
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
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign(['partner_id']);
            $table->dropForeign(['handler_id']);
            $table->dropForeign(['creator_id']);
        });
        Schema::drop('contacts');
    }
}
