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
            'band_id' => 1,
            'venue_id' => 1, 
            'event_time' => '8:00 pm',
            'price' => 10.00,
            'buy_tickets' => 'ticketfly.com, or at the venue',
        ]);

        DB::table('events')->insert([
            'band_id' => 2,
            'venue_id' => 2, 
            'event_time' => '8:00 pm',
            'price' => 10.00,
            'buy_tickets' => 'ticketfly.com, or at the venue',
        ])

        
    }
}
