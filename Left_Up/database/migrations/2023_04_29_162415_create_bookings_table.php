<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            // $table->string('time');
            $table->string('locationEn')->nullable();
            $table->string('locationAr')->nullable();

            $table->foreignId('user_id');
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('car_id');
            $table->foreign('car_id')->on('cars')->references('id')->cascadeOnDelete();
            $table->enum('status' , ['wait' , 'finish'])->default('wait');
            $table->unsignedBigInteger('time_id');
            $table->foreign('time_id')->on('times')->references('id')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::table('bookings', function (Blueprint $table) {
        //     $table->unique(['time_id', 'date']);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
