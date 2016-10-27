<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('events')->delete();
        DB::table('venues')->delete();
        DB::table('bands')->delete();
        DB::table('genres')->delete();
        DB::table('users')->delete();

        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(BandsTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
        $this->call(EventsTableSeeder::class);


        Model::reguard();
    }
}
