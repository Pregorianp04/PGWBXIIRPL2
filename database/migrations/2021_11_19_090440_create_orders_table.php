<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->String('invoice',191)->unique();
            $table->Integer('customer_id')->length(10)->unsigned();
            $table->Integer('user_id')->length(10)->unsigned();
            $table->Integer('total');
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) { 
            $table->foreign('customer_id')->references('id')->on('customers')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('orders');
    }
}
