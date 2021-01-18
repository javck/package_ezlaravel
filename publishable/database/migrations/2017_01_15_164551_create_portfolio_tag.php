<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_tag', function(Blueprint $table)
        {
           $table->bigInteger('portfolio_id')->unsigned()->index();
           $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
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
        Schema::table('portfolio_tag', function(Blueprint $table)
        {
            $table->dropForeign(['portfolio_id']);
            $table->dropForeign(['tag_id']);
        });
        Schema::drop('portfolio_tag');

    }
}
