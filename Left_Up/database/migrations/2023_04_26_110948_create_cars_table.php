<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnDelete();
            $table->foreignId('modeel_id');
            $table->foreign('modeel_id')->on('modeels')->references('id')->cascadeOnDelete();
            $table->foreignId('year_id');
            $table->foreign('year_id')->on('years')->references('id')->cascadeOnDelete();
            $table->foreignId('cylinder_id');
            $table->foreign('cylinder_id')->on('cylinders')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('cars');
    }
}