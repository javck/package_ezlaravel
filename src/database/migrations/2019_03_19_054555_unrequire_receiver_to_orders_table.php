<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnrequireReceiverToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('receiver',10)->nullable()->change();
            $table->string('receiverMobile',20)->nullable()->change();
            $table->string('receiverEmail',100)->nullable()->change();
            $table->string('receiverAddress',100)->nullable()->change();
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
            $table->string('receiver',10)->change();
            $table->string('receiverMobile',20)->change();
            $table->string('receiverEmail',100)->change();
            $table->string('receiverAddress',100)->change();
        });
    }
}
