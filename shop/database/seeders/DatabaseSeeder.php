<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Trek',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '3999',
        ]);
        DB::table('products')->insert([
            'name' => 'BMC ROADMACHINE ULTEGRA DI2',
            'description' => ' bicykel',
            'size' => 'L',
            'price' => '3886',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 10 DISC MARINE BLUE',
            'description' => ' bicykel',
            'size' => 'L',
            'price' => '2788',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 10 CARBON ONYX BLACK',
            'description' => ' bicykel',
            'size' => 'L',
            'price' => '1999',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 20 DISC PEARL WHITE',
            'description' => 'scott bicykel',
            'size' => 'L',
            'price' => '2999',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 30',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '1222',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT RC 15 CARBON ONYX BLACK',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '4999',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT SE DISC',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '3500',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT CONTESSA SPEEDSTER 15',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '3999',
        ]);

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

        // \App\Models\User::factory(10)->create();
    }
}
