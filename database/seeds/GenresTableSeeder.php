<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([

        	'id' => 3,
        	'name' => 'R&B/Urban Soul',
    	]);

        DB::table('genres')->insert([

        	'id' => 5,
        	'name' => 'Rock & Pop',
    	]);

    	DB::table('genres')->insert([

    		'id' => 6,
    		'name' => 'Alternative Rock',
		]);

		DB::table('genres')->insert([

			'id' => 8, 
			'name' => 'Rap & Hip Hop',
		]);

		DB::table('genres')->insert([

			'id' => 9,
			'name' => 'Country & Folk',
		]);

		DB::table('genres')->insert([

			'id' => 12,
			'name' => 'Jazz & Blues',
		]);

		DB::table('genres')->insert([

			'id' => 16, 
			'name' => 'Hard Rock/Metal',
		]);

		DB::table('genres')->insert([

			'id' => 18,
			'name' => 'Dance/Electronic',
		]);

		DB::table('genres')->insert([

			'id' => 73,
			'name' => 'Alternative & Indie',
		]);

    }
}
