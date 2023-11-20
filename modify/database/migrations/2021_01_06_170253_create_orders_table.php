<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('total_discount', 15, 2);
            $table->decimal('sub_total', 15, 2);
            $table->decimal('total', 15, 2);
            $table->decimal('delivery_charge', 15, 2);
            $table->string('name', 64);
            $table->string('email', 32);
            $table->string('phone', 32);
            $table->text('address');
            $table->text('order_note')->nullable();
            $table->string('payment_type', 32);
            $table->integer('status')->default(0)->comment('0= pending, 1=processing, 1=collected, 1=shipped, 1=complete,');
            $table->integer('is_completed')->default(0);
            $table->integer('payment_status')->default(0)->comment('0= pending, 1=completed,');
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
        Schema::dropIfExists('orders');
    }
}
