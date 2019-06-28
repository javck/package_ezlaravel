<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',40);
            $table->string('tel',40)->nullable();
            $table->string('secret',40);
            $table->string('email',100)->nullable();
            $table->string('website',100)->nullable();
            $table->string('address',100)->nullable();
            $table->double('discount')->default(1);
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
        Schema::drop('partners');
    }
}
