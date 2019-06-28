<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('owner_id')->unsigned()->index();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('receiver',10);
            $table->string('receiverTitle',10)->nullable();
            $table->string('receiverMobile',20);
            $table->string('receiverEmail',100);
            $table->string('receiverAddress',100);
            $table->string('message',500)->nullable();
            $table->string('couponCode',100)->nullable();
            $table->integer('subtotal'); //訂單金額
            $table->integer('shipCost')->default(0); //運費
            $table->string('status',20)->default('create'); //訂單狀態
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
        Schema::table('orders', function(Blueprint $table)
        {
            $table->dropForeign(['owner_id']);
        });
        Schema::dropIfExists('orders');
    }
}
