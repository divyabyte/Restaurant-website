<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_items_id');
            $table->foreign('order_items_id')->references('id')->on('orders_items')->onDelete('cascade');
            $table->string('price');
            $table->string('quantity');
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
        Schema::dropIfExists('final_orders');
    }
}
