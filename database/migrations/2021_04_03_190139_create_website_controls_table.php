<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_controls', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->string('logo', 191);
            $table->string('icon', 191);
            $table->text('address');
            $table->string('email', 32);
            $table->string('phone', 32);
            $table->string('link', 64)->nullable();
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
        Schema::dropIfExists('website_controls');
    }
}
