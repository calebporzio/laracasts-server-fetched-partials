<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username');
            $table->string('avatar');
            $table->string('bio');
            $table->string('profile');
            $table->timestamps();
        });
    }
}
