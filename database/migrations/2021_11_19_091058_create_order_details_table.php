<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('order_id')->length(10)->unsigned();
            $table->Integer('product_id')->length(10)->unsigned();
            $table->Integer('qty')->length(11)->unsigned();
            $table->Integer('price')->length(11)->unsigned();
            $table->timestamps();
        });

        Schema::table('order_details', function (Blueprint $table) { 
            $table->foreign('order_id')->references('id')->on('orders')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
