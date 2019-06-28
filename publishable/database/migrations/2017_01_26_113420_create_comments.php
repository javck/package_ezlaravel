<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('article_id')->unsigned()->index()->nullable();
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->string('name',40)->nullable();
            $table->string('email',100)->nullable();
            $table->string('website',255)->nullable();
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('content',800);
            $table->integer('reply_to')->nullable();
            $table->integer('sort')->default(0);
            $table->boolean('enabled')->default(true);
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
        Schema::table('comments', function(Blueprint $table)
        { 
            $table->dropForeign(['user_id']);
            $table->dropForeign(['article_id']);
        });
        Schema::drop('comments');
    }
}
