<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->integer('genre_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->text('description');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });

        // Declare foreign keys
        Schema::table('bands', function (Blueprint $table) {
            
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop foreign keys
        Schema::table('bands', function (Blueprint $table) {
            $table->dropForeign('bands_genre_id_foreign');
            $table->dropForeign('bands_owner_id_foreign');

        });

        Schema::drop('bands');
    }
}
