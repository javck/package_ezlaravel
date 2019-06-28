<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('cgy',20);
            $table->string('title',40);
            $table->string('mediums',400)->nullable();
            $table->string('mode',20);
            $table->integer('author')->unsigned()->index();
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
            $table->string('content_small',80)->nullable();
            $table->text('content');
            $table->string('attachment_names',200)->nullable();
            $table->string('attachment_paths',500)->nullable();
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
        Schema::table('articles', function(Blueprint $table)
        { 
            $table->dropForeign(['author']);
        });
        Schema::drop('articles');
    }
}
