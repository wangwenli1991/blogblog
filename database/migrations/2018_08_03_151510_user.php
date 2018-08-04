<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('user', function (Blueprint $table) {
             $table->increments('user_id');
             $table->string('user_name');
             $table->string('email')->unique();
             $table->string('user_pass');
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
        //
        Schema::dropIfExists('user');

    }
}
