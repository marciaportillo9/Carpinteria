<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_details', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('subtotal');


            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            //$table->integer('sale_id')->unsigned();
            //$table->foreign('sale_id')->references('id')->on('sales');


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
        Schema::dropIfExists('sale_details');
    }
}
