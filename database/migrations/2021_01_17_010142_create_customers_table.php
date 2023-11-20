<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('image', 191)->nullable();
            $table->text('billing_address')->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('ip_address',191);
            $table->string('mac_address',191);
            $table->string('status', 16)->default('Active')->comment('Active & Inactive');
            $table->timestamps();
            $table->softDeletes();


//            $table->uuid('uuid');
//            $table->foreignId('user_id')->constrained()->onDelete('cascade');
//            $table->string('name', 64);
//            $table->string('user_name', 64)->nullable();
//            $table->string('password', 64)->nullable();
//            $table->string('phone', 32)->nullable();
//            $table->string('email', 32);
//
//            $table->timestamps();
//            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
