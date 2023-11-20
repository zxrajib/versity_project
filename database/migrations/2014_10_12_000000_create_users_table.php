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
            $table->id();
            $table->uuid('uuid');
            $table->string('name', 191);
            $table->string('user_name', 191)->unique();
            $table->string('phone', 191)->unique();
            $table->string('email', 191)->unique()->nullable();
            $table->string('password', 191);
            $table->enum('user_type', ['Admin', 'Vendor', 'Customer']);
            $table->tinyInteger('email_verified')->default('0');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_verification_token')->nullable();
            $table->string('status', 16)->default('Active')->comment('Active & Inactive');
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
