<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_details', function (Blueprint $table) {

            $table->id();
            $table->uuid('uuid');
            $table->foreignId('stock_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('attr_id')->nullable();
            $table->integer('quantity');
            $table->integer('total_in')->default(0);
            $table->integer('total_out')->default(0);
            $table->decimal('price', 8,2);
            $table->decimal('discount', 8,2)->default(0.00);
            $table->decimal('discount_percentage', 8,2)->default(0.00);
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
        Schema::dropIfExists('stock_details');
    }
}
