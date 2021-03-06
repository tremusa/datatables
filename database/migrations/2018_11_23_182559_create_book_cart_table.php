<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id');
            $table->integer('cart_id');
            $table->string('sellOrReturn');
            $table->integer('quantity');
            $table->double('price',10,2);

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
        Schema::dropIfExists('book_cart');
    }
}
