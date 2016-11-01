<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'band_id' => 393,
            'venue_id' => 7, 
            'event_time' => '2016-11-10 20:00:00',
            'price' => 25.00,
            'buy_tickets' => 'livenation.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 570,
            'venue_id' => 6, 
            'event_time' => '2016-12-01 21:00:00',
            'price' => 129.50,
            'buy_tickets' => 'ticketmaster.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 904,
            'venue_id' => 9, 
            'event_time' => '2016-11-09 20:00:00',
            'price' => 20.00,
            'buy_tickets' => 'ticketweb.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 578,
            'venue_id' => 22, 
            'event_time' => '2016-11-19 21:00:00',
            'price' => 20.00,
            'buy_tickets' => 'ticketweb.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 1128,
            'venue_id' => 23, 
            'event_time' => '2016-11-22 20:00:00',
            'price' => 70.00,
            'buy_tickets' => 'ticketmaster.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 607,
            'venue_id' => 7, 
            'event_time' => '2016-11-29 20:00:00',
            'price' => 77.00,
            'buy_tickets' => 'livenation.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 1078,
            'venue_id' => 23, 
            'event_time' => '2016-12-04 19:30:00',
            'price' => 125.00,
            'buy_tickets' => 'ticketmaster.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 115,
            'venue_id' => 7, 
            'event_time' => '2016-12-31 21:00:00',
            'price' => 65.00,
            'buy_tickets' => 'livenation.com, additional fees applied at checkout',
        ]);

        DB::table('events')->insert([
            'band_id' => 860,
            'venue_id' => 6, 
            'event_time' => '2017-01-05 19:00:00',
            'price' => 101.00,
            'buy_tickets' => 'ticketmaster.com, additional fees applied at checkout',
        ]);

        
    }
}
