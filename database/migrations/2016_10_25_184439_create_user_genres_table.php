<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_genres', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->timestamps();

        });

        // Create FK's
        Schema::table('user_genres', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop FK's
        Schema::table('user_genres', function (Blueprint $table) {
            $table->dropForeign('user_genres_user_id_foreign');
            $table->dropForeign('user_genres_genre_id_foreign');
        });

        // drop table
        Schema::drop('user_genres');
    }
}
