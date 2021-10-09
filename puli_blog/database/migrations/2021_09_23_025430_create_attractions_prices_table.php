<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attractions_id')->nullable();
            $table->foreign('attractions_id')->on('attractions')->references('id')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->unsignedBigInteger('price')->nullable();
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
        Schema::dropIfExists('attractions_prices');
    }
}
