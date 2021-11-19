<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name',191);
            $table->String('description',191);
            $table->String('stock',191);
            $table->String('price',191);
            $table->Integer('category_id')->length(10)->unsigned();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) { 
            $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::dropIfExists('products');
    }
}
