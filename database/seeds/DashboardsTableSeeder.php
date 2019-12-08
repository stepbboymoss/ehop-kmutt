<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DashboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dashboards')->insert([
            'people' => '10',
            'route_id' => '1',
            'created_at' => Carbon::parse('01-01-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '5',
            'route_id' => '2',
            'created_at' => Carbon::parse('02-02-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '45',
            'route_id' => '1',
            'created_at' => Carbon::parse('03-03-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '100',
            'route_id' => '2',
            'created_at' => Carbon::parse('04-04-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '25',
            'route_id' => '1',
            'created_at' => Carbon::parse('04-04-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '0',
            'route_id' => '2',
            'created_at' => Carbon::parse('04-04-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '0',
            'route_id' => '1',
            'created_at' => Carbon::parse('10-01-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '75',
            'route_id' => '2',
            'created_at' => Carbon::parse('11-01-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '41',
            'route_id' => '1',
            'created_at' => Carbon::parse('12-01-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '10',
            'route_id' => '2',
            'created_at' => Carbon::parse('1-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '15',
            'route_id' => '2',
            'created_at' => Carbon::parse('2-10-2019 23:59')	
        ]);
        DB::table('dashboards')->insert([
            'people' => '80',
            'route_id' => '1',
            'created_at' => Carbon::parse('3-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '45',
            'route_id' => '2',
            'created_at' => Carbon::parse('4-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '57',
            'route_id' => '1',
            'created_at' => Carbon::parse('5-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '24',
            'route_id' => '2',
            'created_at' => Carbon::parse('6-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '88',
            'route_id' => '1',
            'created_at' => Carbon::parse('7-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '35',
            'route_id' => '2',
            'created_at' => Carbon::parse('8-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '0',
            'route_id' => '1',
            'created_at' => Carbon::parse('9-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '0',
            'route_id' => '2',
            'created_at' => Carbon::parse('10-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '45',
            'route_id' => '1',
            'created_at' => Carbon::parse('11-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '25',
            'route_id' => '1',
            'created_at' => Carbon::parse('12-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '10',
            'route_id' => '2',
            'created_at' => Carbon::parse('13-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '20',
            'route_id' => '1',
            'created_at' => Carbon::parse('14-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '54',
            'route_id' => '2',
            'created_at' => Carbon::parse('15-10-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '0',
            'route_id' => '1',
            'created_at' => Carbon::parse('01-12-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '0',
            'route_id' => '2',
            'created_at' => Carbon::parse('02-12-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '75',
            'route_id' => '1',
            'created_at' => Carbon::parse('03-12-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '42',
            'route_id' => '2',
            'created_at' => Carbon::parse('04-12-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '35',
            'route_id' => '1',
            'created_at' => Carbon::parse('05-12-2019 23:59')	
        ]);

        DB::table('dashboards')->insert([
            'people' => '26',
            'route_id' => '2',
            'created_at' => Carbon::parse('06-12-2019 23:59')	
        ]);

    }
}
