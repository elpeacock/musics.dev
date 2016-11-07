<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bands', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('band_id')->unsigned();
            $table->timestamps();

        });

        // Create FK's
        Schema::table('user_bands', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('band_id')->references('id')->on('bands');
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
        Schema::table('user_bands', function ($table) {
            $table->dropForeign('user_bands_user_id_foreign');
            $table->dropForeign('user_bands_band_id_foreign');

        });

        // drop table
        Schema::drop('user_bands');
    }
}
