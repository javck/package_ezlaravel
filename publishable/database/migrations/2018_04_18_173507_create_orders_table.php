<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id')->index(); //下單人
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('receiver', 10)->nullable(); //收件人姓名
            $table->string('receiverTitle', 10)->nullable(); //收件人頭銜
            $table->string('receiverMobile', 20)->nullable(); //收件人手機號碼
            $table->string('receiverEmail', 100)->nullable(); //收件人電子郵箱
            $table->string('receiverAddress', 100)->nullable(); //收件人地址
            $table->string('message', 500)->nullable(); //訊息
            $table->string('couponCode', 100)->nullable(); //優惠券序號
            $table->integer('subtotal')->default(0); //訂單金額
            $table->integer('shipCost')->default(0); //運費
            $table->string('status', 20)->default('create'); //訂單狀態
            $table->string('pay_type', 100)->nullable(); //付款類型
            $table->string('trade_no', 100)->nullable(); //金流序號
            $table->timestamp('pay_at')->nullable(); //付款時間
            $table->string('pay_from', 255)->nullable(); //付款來源
            $table->integer('pay_pre')->nullable(); //支付前餘額
            $table->integer('pay_after')->nullable(); //支付後餘額
            $table->string('reply_desc', 255)->nullable(); //回覆給客戶的訊息
            $table->string('type', 255)->default('normal'); //類型
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
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
        });
        Schema::dropIfExists('orders');
    }
}
