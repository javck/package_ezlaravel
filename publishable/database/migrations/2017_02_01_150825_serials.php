<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Serials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->nullable(); //使用人
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('serial', 10); //序號
            $table->string('mode', 20); //模式
            $table->boolean('isSent')->default(false); //是否寄出
            $table->boolean('isUsed')->default(false); //是否用過
            $table->string('type', 255)->default('once'); //類型
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
        Schema::table('serials', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::drop('serials');
    }
}
