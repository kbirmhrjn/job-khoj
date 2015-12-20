<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->timestamp('dob')->nullable();
            $table->string('mobile');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('district')->nullable();
            $table->string('role')->default('jobseeker'); // jobseeker|employer|super|editor

            $table->string('company')->nullable();
            $table->string('tagline')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable(); // logo | profile picture
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
