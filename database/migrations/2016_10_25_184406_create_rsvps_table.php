<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsvpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsvps', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->timestamps();

        });

        // Create FK's
        Schema::table('rsvps', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop FK's
        Schema::table('rsvps', function (Blueprint $table) {
            $table->dropForeign('rsvps_user_id_foreign');
            $table->dropForeign('rsvps_event_id_foreign');

        });

        // drop table
        Schema::drop('rsvps');
    }
}
