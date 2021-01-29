<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelusers', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("countrycode");
            $table->date("birthdate");
            $table->string("password");
            $table->string("wallet_currency");
            $table->double("current_balance");
            $table->string("image");
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
        Schema::dropIfExists('modelusers');
    }
}
