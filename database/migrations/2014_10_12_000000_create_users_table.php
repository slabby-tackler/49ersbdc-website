<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_type_id')->default(3);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(array(
            array(
                'name' => 'Nick Wade',
                'email' => 'nwade514@gmail.com',
                'password' => bcrypt(str_random(20)),
                'user_type_id' => 1,
            ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
