<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',20);
            $table->string('mobile',20);
            $table->string('subject',100);
            $table->string('mode',20)->nullable();
            $table->string('message',500)->nullable();
            $table->string('service',40)->nullable();
            $table->string('email',100)->nullable();
            $table->string('status',20)->default('unHandled');
            $table->string('tag',50)->nullable();
            $table->integer('handler_id')->unsigned()->index()->nullable();
            $table->foreign('handler_id')->references('id')->on('users');            
            $table->integer('creator_id')->unsigned()->index()->nullable();
            $table->foreign('creator_id')->references('id')->on('users');
            $table->string('source',20)->nullable();
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
        Schema::drop('contacts');
    }
}
