<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->tinyInteger('role')->default('0');
            $table->string('fb_profile_url1')->nullable();
            $table->string('fb_profile_url2')->nullable();
            $table->string('fb_profile_url3')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('street_address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('notes')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('email_sent')->default('0');
            $table->timestamp('subscription_s_date')->nullable();
            $table->timestamp('subscription_e_date')->nullable();
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
