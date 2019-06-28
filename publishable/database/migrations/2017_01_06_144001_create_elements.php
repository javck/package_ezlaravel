<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('page',20);
            $table->string('mode',10);
            $table->string('title',40);
            $table->string('position',20);
            $table->string('lang',20);
            $table->string('icon',40)->nullable();
            $table->string('subtitle',80)->nullable();
            $table->string('content',2000)->nullable();
            $table->string('url',255)->nullable();
            $table->string('url_txt',20)->nullable();
            $table->string('pic',255)->nullable();
            $table->string('video',255)->nullable();
            $table->string('alt',40)->nullable();
            $table->string('title_pos',20)->nullable();
            $table->string('q_mode',40)->nullable(); //作為Q&A問題標籤使用
            $table->string('i_mode',40)->nullable(); //作為資訊切換標籤使用
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
        Schema::drop('elements');
    }
}
