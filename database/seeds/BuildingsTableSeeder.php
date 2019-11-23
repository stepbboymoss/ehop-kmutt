<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
            'location_id' => '1',
            'building' => 'สำนักงานเทคโนโลยี SMEs (UTO)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '1',
            'building' => 'อาคารสำนักงานอธิการบดี (Office of The President)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '1',
            'building' => 'อาคารภาควิชาคมี (Chemistry Department Building (old))'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '1',
            'building' => 'อาคารภาควิชาฟิสิกส์ (Department of Physics Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'อาคารสัมมนา (Seminar Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'อาคารนวัตกรรมการเรียนรู้เฉลิมพระเกียรติ 80 พรรมา มูลนิธิไทยคม (Innovative learning Institute Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'รร.ดรุณสิกขาลัย (Darunsikkhalai School)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'วิศวกรรมเครื่องกล (Mechanical Engineering laboratory)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'วิศวกรรมอุตสาหการ วิศวกรรมเครื่องมือและวัสดุ วิศวกรรมคอมพิวเตอร์ (Production Engineering & Tool and Materials Engineering & Computer Engineering Laboratory'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'อาคารวิศวกรรมครื่องกล 4 (Mechanical ENG. Building 4)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'อาคารจอดรถ อาคารสูง 14 ชั้น'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '2',
            'building' => 'อาคารสหกรณ์ร้านค้า (Cooperative Store Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'อาคารวิศววัฒนะ (Engineering Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'วิศวกรรมหล่อโลหะ (Foundry Engineering Laboratory)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'วิศวกรรมแม่พิมพ์ขึ้นรูป (Metal Forming Engineering Laboratory)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'วิศวกรรมโยธาแลโลจิสติกส์ (Civil and Logistics Engineering Laboratory)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'บ้านธรรมรักษา 2 (Dhammaraksa Residence Hall 2(Domitory Male))'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'บ้านธรรมรักษา 1 (Dhammaraksa Residence Hall 1(Domitory Female))'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'อาคารโรงประลองเทคโนโลยีแลวัสดุ (Energy and Materials Workshop)'
        ]);
        
        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'อาคารเรียนและปฏิติการคณะพลังงานสิ่งแวดล้อมและวัสดุ(School of Energy & Environment and Materials)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'อาคารเรียนรวม 5 (Classroom Building 5)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '3',
            'building' => 'อาคาร Green Sociely'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '4',
            'building' => 'อาคารเรียนรวม 3 (Classroom Building 3)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '4',
            'building' => 'อาคารเรียนรวม 4 (Classroom Building 4)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '4',
            'building' => 'อาคารวิศวกรรมเคมี (Chemical Engineering Building)'
        ]);
        DB::table('buildings')->insert([
            'location_id' => '4',
            'building' => 'อาคารพระจอมเกล้าราชานุสรณ์ 190 ปี (โรงอาหาร)(King Mongkut Memorial Building (Canteen))'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '5',
            'building' => 'อาคารปฏิบัติการทางวิศวกรรมอุตสาหการ 5 (Production ENG. Building 5)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '5',
            'building' => 'อาคารเรียนรวม 1 (Classroom Building 1)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '5',
            'building' => 'อาคารโรงแยกขยะ (Recycle Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '5',
            'building' => 'ศูนย์ซ่อมบำรุง (Maintenance and Services Center)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '5',
            'building' => 'อาคารเรือนอนุบาลตันไม้ (Nursery Plant)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '5',
            'building' => 'อาคารเรียนและปฏิบัติการทางศิลปศาสตร์ (School of Liberal Arts)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '5',
            'building' => 'อาคารไฟฟ้าแรงสูง (Hi-Voliage Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '6',
            'building' => 'สำนักงานอาคารและสถานที่ (Building and Grounds Division)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '6',
            'building' => 'อาคารเรียนรวม 2 (Classroom Building 2)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '6',
            'building' => 'อาคารภาควิชาคณิตศาสตร์ (Department of Mathematics Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '6',
            'building' => 'ลำนักหอสมุด (Library Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '6',
            'building' => 'อาคารคณะเทคโนโลยีสารสนเทศ (School of Information Technology)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '7',
            'building' => 'อาคารศูนย์ครื่องมือวิทยาศาสตร์ (Scientic Instrumentation Center)'
        ]);
        
        DB::table('buildings')->insert([
            'location_id' => '7',
            'building' => 'อาคารภาควิชาจุลชีววิทยา (Microbiology Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '7',
            'building' => 'อาคารปฏิบัติการพื้นฐานทางวิทยาศาสตร์(Fundamental Science Laboratory Building)'
        ]);

        DB::table('buildings')->insert([
            'location_id' => '8',
            'building' => 'สถาบันวิทยาการหุ่นยนต์ภาคสนาม (Institute of Field Robotics)'
        ]);

    }
}
