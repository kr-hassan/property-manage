<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('feature_image', 191);
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('sale')->default(1)->comment('0= rent, 1= sale');
            $table->unsignedBigInteger('type')->default(1)->comment('0=land, 1=apartment, 2=villa');
            $table->string('bedrooms', 32)->nullable();
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
        Schema::dropIfExists('properties');
    }
}
