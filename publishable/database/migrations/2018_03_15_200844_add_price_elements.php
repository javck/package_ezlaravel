<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceElements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elements', function (Blueprint $table) {
            $table->integer('price')->nullable(); //價格
            $table->integer('price2')->nullable(); //第二價格
            $table->boolean('isBestPrice')->default(false); //推薦方案
            $table->string('priceUnit',5)->nullable(); //價格單位
            $table->string('price2Unit',5)->nullable(); //第二價格單位
            $table->string('currency',5)->nullable(); //貨幣
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elements', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('price2');
            $table->dropColumn('isBestPrice');
            $table->dropColumn('priceUnit');
            $table->dropColumn('price2Unit');
            $table->dropColumn('currency');
        });
    }
}
