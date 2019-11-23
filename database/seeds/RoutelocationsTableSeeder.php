<?php

use Illuminate\Database\Seeder;

class RoutelocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('route_locations')->insert([
            'route_id' => '1',
            'location_id' => '1'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '1',
            'location_id' => '2'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '1',
            'location_id' => '3'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '1',
            'location_id' => '4'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '1',
            'location_id' => '5'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '1',
            'location_id' => '7'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '1'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '7'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '8'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '6'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '5'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '4'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '3'
        ]);

        DB::table('route_locations')->insert([
            'route_id' => '2',
            'location_id' => '2'
        ]);

    }
}
