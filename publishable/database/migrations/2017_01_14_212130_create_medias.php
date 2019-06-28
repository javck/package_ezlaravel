<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title',40);
            $table->string('cgy',20);
            $table->string('lang',20);
            $table->string('pics',500);
            $table->string('title_link',255)->nullable();
            $table->string("l_link",255)->nullable();
            $table->string("l_icon",20)->nullable();
            $table->string("l_type",20)->nullable();
            $table->string("r_link",255)->nullable();
            $table->string("r_icon",20)->nullable();
            $table->string("r_type",20)->nullable();
            $table->integer('sort')->default(0);
            $table->boolean('enabled')->default(true);
            $table->string('subtitle',80)->nullable();
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
        Schema::drop('medias');
    }
}
