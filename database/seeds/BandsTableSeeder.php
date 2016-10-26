<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
        	'name' => 'red hot chili peppers',
        	'genre_id' => '1',
        	'owner_id' => '1',
        	'description' => 'the raddest',
        	'image_url' => 'animage.jpg',
    	]);

    	DB::table('bands')->insert([
    		'name' => 'band',
        	'genre_id' => '2',
        	'owner_id' => '2',
        	'description' => 'cool band',
        	'image_url' => 'animage.jpg',
		]);
    }
}
