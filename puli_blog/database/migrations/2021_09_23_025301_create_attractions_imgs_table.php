<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('path_img')->nullable();
            $table->unsignedBigInteger('attractions_id')->nullable();
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
        Schema::dropIfExists('attractions_imgs');
    }
}
