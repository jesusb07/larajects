<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique(); //campo para relacionar la tabla
            $table->foreign('user_id')
                ->references('id')// campo de referencia
                ->on('users') //tabla de relacion
                ->onDelete('cascade');
            $table->mediumText('bio')->nullable();
            $table->string('fav_movie',200)->nullable();
            $table->string('fav_performer',200)->nullable();
            $table->string('fav_genre',200)->nullable();
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
        Schema::drop('users');
    }
}
