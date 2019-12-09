<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BuildingsTableSeeder::class);
        $this->call(BusesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(RoutelocationsTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(DashboardsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
