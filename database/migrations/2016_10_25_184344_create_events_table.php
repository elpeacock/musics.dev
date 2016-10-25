<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('band_id')->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->dateTime('event_time');
            $table->decimal('price', 4, 2);
            $table->text('buy_tickets');
            $table->timestamps();
        });

        // create fk's
        Schema::table('events', function (Blueprint $table) {

            $table->foreign('band_id')->references('id')->on('bands');
            $table->foreign('venue_id')->references('id')->on('venues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop fk's
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_band_id_foreign');
            $table->dropForeign('events_venue_id_foreign');

        });

        Schema::drop('events');
    }
}
