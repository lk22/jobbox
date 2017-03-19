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
            $table->increments('id');
            $table->string('firstname')->default('');
            $table->string('middlename')->default('');
            $table->string('lastname')->default('');
            $table->string('name')->default('');
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('avatar')->default('');
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->boolean('has_active_email')->default(false);
            $table->string('dream_job_title')->default('');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
