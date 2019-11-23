<?php

use Illuminate\Database\Seeder;

class BusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            'route_id' => '1',
            'lat' => '100.4950547',
            'lon' => '13.65283857'
        ]);

        DB::table('buses')->insert([
            'route_id' => '2',
            'lat' => '100.4954547',
            'lon' => '13.65103857'
        ]);
    }
}
