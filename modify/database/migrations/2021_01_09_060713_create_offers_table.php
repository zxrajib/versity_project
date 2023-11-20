<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name', 32);
            $table->string('type', 32);
            $table->string('image', 191);
            $table->decimal('offer_price', 8, 2);
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('offers');
    }
}
