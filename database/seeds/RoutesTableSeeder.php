<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            'route_name' => 'เส้นสีเหลือง',
            'color' => 'yellow'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'เส้นสีแสด',
            'color' => 'orange'
        ]);
    }
}
