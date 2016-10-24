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
            $table->foreign('band_id')->references('id')->on('bands');

            $table->integer('venue_id')->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues');

            $table->dateTime('event_time');
            $table->decimal('price', 4, 2);
            $table->text('buy_tickets');
            
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
        Schema::drop('events');
    }
}
