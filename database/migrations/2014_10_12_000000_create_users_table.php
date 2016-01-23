<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            //$table->string('email')->unique();
            $table->string('email')->nullable();
            $table->string('mobile',11)->index();
            $table->string('weixin',32);
            $table->string('qq',32);
            $table->string('password', 60)->nullable();
            $table->string('confirmation_code');
            $table->string('mobile_confirm_code');
            $table->boolean('confirmed')->default(config('access.users.confirm_email') ? false : true);
            $table->boolean('mobile_confirmed')->default(false);
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default('0000-00-00 00:00');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
