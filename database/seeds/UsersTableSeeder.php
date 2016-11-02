<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Liz Peacock',
            'email' => 'liz@nothing.com', 
            'password' => bcrypt('vagrant'),
            'zip_code' => '78297',
            
        ]);

        DB::table('users')->insert([
            'name' => 'Joe Phearse',
            'email' => 'joe@nothing.com', 
            'password' => bcrypt('vagrant'),
            'zip_code' => '78297',
            
        ]);

        DB::table('users')->insert([
            'name' => 'Kirk Letsinger',
            'email' => 'kirk@nothing.com', 
            'password' => bcrypt('vagrant'),
            'zip_code' => '78297',
            
        ]);
    }
}
