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
            $table->string('std_name',20)->nullable();
            $table->string('std_grade',20)->nullable();
            $table->string('applyCourse',20)->nullable();
            $table->boolean('isLearned')->nullable();
            $table->boolean('isHandled')->default(false);
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
