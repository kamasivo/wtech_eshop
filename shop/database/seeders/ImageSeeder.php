<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'product_id' => '1',
            'path' => '/Scott_Foil.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '2',
            'path' => '/BMC_Roadmachine.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '3',
            'path' => '/Scott_Addict10_Carb.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '4',
            'path' => '/Scott_Addict20.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '5',
            'path' => '/Scott_Addict30.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/Scott_AddictRC.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/Scott_Foil_2.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/Scott_Foil_3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/Scott_Foil_4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '7',
            'path' => '/Scott_AddictSE.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '8',
            'path' => '/Scott_AddictRC.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '9',
            'path' => '/Scott_ContessaSpeedster15.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '10',
            'path' => '/ebike11.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '11',
            'path' => '/ebike1.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '12',
            'path' => '/ebike3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '13',
            'path' => '/ebike4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '14',
            'path' => '/ebike5.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '15',
            'path' => '/cloth1.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '16',
            'path' => '/cloth2.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '17',
            'path' => '/cloth3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '18',
            'path' => '/cloth4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '19',
            'path' => '/cloth5.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '20',
            'path' => '/boots1.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '21',
            'path' => '/boots2.jpeg',
        ]);
        DB::table('images')->insert([
            'product_id' => '22',
            'path' => '/boots3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '23',
            'path' => '/boots4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '24',
            'path' => '/boots5.jpg',
        ]);
    }
}
