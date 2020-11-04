<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemCgyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_cgy', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->unsigned()->index();
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->bigInteger('cgy_id')->unsigned()->index();
            $table->foreign('cgy_id')->references('id')->on('cgys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_cgy', function(Blueprint $table)
        {
            $table->dropForeign(['item_id']);
            $table->dropForeign(['cgy_id']);
        });
        Schema::dropIfExists('item_cgy');
    }
}
