<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('total')->nullable();

            $table->integer('QTY');
            $table->foreignId('oil_id');
            $table->foreign('oil_id')->on('oilcars')->references('id')->cascadeOnDelete();
            $table->foreignId('booking_id');
            $table->foreign('booking_id')->on('bookings')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('bills');
    }
}
