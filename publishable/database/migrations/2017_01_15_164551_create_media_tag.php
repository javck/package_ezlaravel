<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_tag', function(Blueprint $table)
        {
           $table->bigInteger('media_id')->unsigned()->index();
           $table->foreign('media_id')->references('id')->on('medias')->onDelete('cascade');
           $table->bigInteger('tag_id')->unsigned()->index();
           $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::table('media_tag', function(Blueprint $table)
        {
            $table->dropForeign(['media_id']);
            $table->dropForeign(['tag_id']);
        });
        Schema::drop('media_tag');

    }
}
