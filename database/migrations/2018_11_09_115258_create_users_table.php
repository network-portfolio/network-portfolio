<?php

use Illuminate\Support\Facades\Schema;
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
            /*
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('portfolio_url');
            $table->string('avatar_url');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            */
            $table->increments('id');
            $table->string('nickname');
            $table->boolean('has_accepted_gdpr')->default(false);
            $table->boolean('has_accepted_cookies')->default(false);
            $table->string('provider');
            $table->string('provider_id');
            $table->string('network_portfolio_api_token');
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
        Schema::dropIfExists('users');
    }
}