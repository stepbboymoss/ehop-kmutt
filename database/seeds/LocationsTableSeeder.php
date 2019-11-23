<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'order' => '1',
            'location_name' => 'จุดจอดท่ารถ มจธ.',
            'detail' => 'none',
            'image' => 'assets/img/stop1.jpg',
            'lat' => '100.495324',
            'lon' => '13.651941'
        ]);

        DB::table('locations')->insert([
            'order' => '2',
            'location_name' => 'ประตูทางเข้าโรงเรียนดรุณสิกขาลัย',
            'detail' => 'none',
            'image' => 'assets/img/stop2.jpg',
            'lat' => '100.495041',
            'lon' => '13.650136'
        ]);

        DB::table('locations')->insert([
            'order' => '3',
            'location_name' => 'ประตูทางเข้าอาคารหอพักนักศึกษาหญิง',
            'detail' => 'none',
            'image' => 'assets/img/stop3.jpg',
            'lat' => '100.494177',
            'lon' => '13.649396'
        ]);

        DB::table('locations')->insert([
            'order' => '4',
            'location_name' => 'ด้านหน้าอาคารเรียนรวม 3',
            'detail' => 'none',
            'image' => 'assets/img/stop4.jpg',
            'lat' => '100.491991',
            'lon' => '13.650224'
        ]);

        DB::table('locations')->insert([
            'order' => '5',
            'location_name' => 'ด้านหน้าอาคารอเนกประสงค์',
            'detail' => 'none',
            'image' => 'assets/img/stop5.jpg',
            'lat' => '100.493092',
            'lon' => '13.652134'
        ]);

        DB::table('locations')->insert([
            'order' => '6',
            'location_name' => 'ด้านหน้าอาคารสำนักหอสมุด',
            'detail' => 'none',
            'image' => 'assets/img/stop6.jpg',
            'lat' => '100.493964',
            'lon' => '13.652368'
        ]);

        DB::table('locations')->insert([
            'order' => '7',
            'location_name' => 'ด้านหน้าอาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์',
            'detail' => 'none',
            'image' => 'assets/img/stop7.jpg',
            'lat' => '100.49479',
            'lon' => '13.653657'
        ]);

        DB::table('locations')->insert([
            'order' => '8',
            'location_name' => 'ประตูทางเข้าสถาบันวิทยาการหุ่นยนต์ภาคสนาม',
            'detail' => 'none',
            'image' => 'assets/img/stop8.jpg',
            'lat' => '100.494535',
            'lon' => '13.654025'
        ]);

    }
}
