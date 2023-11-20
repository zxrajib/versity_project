<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {

        $table->id();
        $table->uuid('uuid');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('total_price', 8,2);
            $table->decimal('total_discount', 8,2);
            $table->decimal('total_vat', 8,2)->nullable();
            $table->decimal('paid', 8,2);
            $table->decimal('due', 8,2);
            $table->integer('status')->default(1)->comment('1=active & 0=inactive');
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
        Schema::dropIfExists('sales');
    }
}
