<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i<=100; $i++):
            DB::table('images')
                ->insert([
                    'image' => $faker->sentence,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        endfor;
    }
}
