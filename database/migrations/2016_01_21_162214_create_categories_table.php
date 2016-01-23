<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('_lft');
            $table->unsignedInteger('_rgt');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('name', 32);//目录名称
            $table->string('alias',32);//目录别名，用于seo
            $table->unsignedTinyInteger('channel'); //频道:0-云购,1-mobile,2-web
            $table->tinyInteger('model'); //模型：
            $table->timestamps();
            $table->index([ '_lft', '_rgt', 'parent_id' ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
