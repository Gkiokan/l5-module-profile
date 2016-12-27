<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();

            $table->string('firstname')->nullable()->default('');
            $table->string('lastname')->nullable()->default('');
            $table->string('bday')->nullable()->default('');

            $table->string('street')->nullable()->default('');
            $table->string('plz')->nullable()->default('');
            $table->string('city')->nullable()->default('');
            $table->string('state')->nullable()->default('');
            $table->string('country')->nullable()->default('');

            $table->string('tel')->nullable()->default('');
            $table->string('fax')->nullable()->default('');
            $table->string('mobil')->nullable()->default('');

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
        Schema::dropIfExists('profiles');
    }
}
