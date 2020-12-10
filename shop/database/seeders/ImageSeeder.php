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
            'path' => '/bike/Scott_Foil.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '2',
            'path' => '/bike/BMC_Roadmachine.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '3',
            'path' => '/bike/Scott_Addict10_Carb.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '4',
            'path' => '/bike/Scott_Addict20.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '5',
            'path' => '/bike/Scott_Addict30.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/bike/Scott_AddictRC.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/bike/Scott_Foil_2.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/bike/Scott_Foil_3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '6',
            'path' => '/bike/Scott_Foil_4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '7',
            'path' => '/bike/Scott_AddictSE.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '8',
            'path' => '/bike/Scott_AddictRC.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '9',
            'path' => '/bike/Scott_ContessaSpeedster15.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '10',
            'path' => '/ebikes/ebike11.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '11',
            'path' => '/ebikes/ebike1.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '12',
            'path' => '/ebikes/ebike3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '13',
            'path' => '/ebikes/ebike4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '14',
            'path' => '/ebikes/ebike5.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '15',
            'path' => '/cloth/cloth1.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '16',
            'path' => '/cloth/cloth2.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '17',
            'path' => '/cloth/cloth3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '18',
            'path' => '/cloth/cloth4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '19',
            'path' => '/cloth/cloth5.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '20',
            'path' => '/boots/boots1.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '21',
            'path' => '/boots/boots2.jpeg',
        ]);
        DB::table('images')->insert([
            'product_id' => '22',
            'path' => '/boots/boots3.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '23',
            'path' => '/boots/boots4.jpg',
        ]);
        DB::table('images')->insert([
            'product_id' => '24',
            'path' => '/boots/boots5.jpg',
        ]);
    }
}
