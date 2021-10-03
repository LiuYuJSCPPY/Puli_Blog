<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('business_time_start')->nullable();
            $table->time('business_time_end')->nullable();
            $table->string('public_holiday')->nullable();
            $table->string('add')->nullable();
            $table->text('artice');
            $table->string('offical')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('display')->default(false);
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
        Schema::dropIfExists('attractions');
    }
}
