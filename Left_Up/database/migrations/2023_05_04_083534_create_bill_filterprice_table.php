<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillFilterpriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_filterprice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('bill_id')->unsigned();
            $table->unsignedBiginteger('filterprice_id')->unsigned();

            $table->foreign('bill_id')->references('id')
                 ->on('bills')->onDelete('cascade');
            $table->foreign('filterprice_id')->references('id')
                ->on('filterprices')->onDelete('cascade');

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
        Schema::dropIfExists('bill_filterprice');
    }
}