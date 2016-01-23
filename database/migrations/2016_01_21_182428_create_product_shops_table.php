<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductShopsTable extends Migration
{
    /**
     * Run the migrations.
     * 用于商城的商品扩展表
     * @return void
     */
    public function up()
    {
        Schema::create('product_shops', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('product_shops');
    }
}
