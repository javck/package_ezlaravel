<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Serials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serials', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('serial', 10);
            $table->string('mode',20);
            $table->boolean('isSent')->default(false);
            $table->boolean('isUsed')->default(false);
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
        Schema::table('serials', function(Blueprint $table)
        { 
            $table->dropForeign(['user_id']);
        });
        Schema::drop('serials');
    }
}
