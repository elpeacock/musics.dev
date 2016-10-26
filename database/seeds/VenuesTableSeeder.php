<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            'name' => 'Swing Station',
            'address' => '3311 West CR 54G',
            'city' => 'LaPorte',
            'state' => 'CO',
            'zip_code' => '80535',
            'description' => 'RIDE YOUR BIKE FOR $1 OFF ALL COLORADO DRAFTS, 2 LIVE MUSIC STAGES - INDOOR AND OUTDOOR, HAPPY HOUR 3-7PM - MONDAY - THURSDAY, OPEN MIC EVERY WEDNESDAY NIGHT, HUGE OUTDOOR PATIO, SMOKING AREA, DANCE FLOOR, HORSESHOES, CORNHOLE, RING SWING, POOL TABLE, DARTBOARDS, SHUFFLEBOARD, AND MUCH MORE!',
            'image_url' => null,
        ]);

        DB::table('venues')->insert([
            'name' => '502 Bar',
            'address' => '502 Embassy Oaks',
            'city' => 'San Antonio',
            'state' => 'TX',
            'zip_code' => '78216',
            'description' => 'Karaoke every monday, Open mic every Sunday.',
            'image_url' => null,
        ]);
    }
}
