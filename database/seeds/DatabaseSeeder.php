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

        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(BandsTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
        $this->call(EventsTableSeeder::class);

        Model::reguard();
    }
}
