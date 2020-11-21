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
            'size' => 'M',
            'price' => '3999',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'BMC ROADMACHINE ULTEGRA DI2',
            'description' => ' bicykel',
            'size' => 'M',
            'price' => '3886',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 10 DISC MARINE BLUE',
            'description' => ' bicykel',
            'size' => 'S',
            'price' => '2788',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 10 CARBON ONYX BLACK',
            'description' => ' bicykel',
            'size' => 'L',
            'price' => '1999',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 20 DISC PEARL WHITE',
            'description' => 'scott bicykel',
            'size' => 'XL',
            'price' => '2999',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 30',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '1222',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT RC 15 CARBON ONYX BLACK',
            'description' => 'trek bicykel',
            'size' => 'XXL',
            'price' => '4999',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT SE DISC',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '3500',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT CONTESSA SPEEDSTER 15',
            'description' => 'trek bicykel',
            'size' => 'M',
            'price' => '3999',
            'category_id' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'SCOTT CONTESSA SPEEDSTER 15',
            'description' => 'trek bicykel',
            'size' => 'M',
            'price' => '3999',
            'category_id' => '2',
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
        DB::table('images')->insert([
            'product_id' => '10',
            'path' => '/bike/Scott_ContessaSpeedster15.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bicykle',
        ]);
        DB::table('categories')->insert([
            'name' => 'Elektrobicykle',
        ]);
        DB::table('categories')->insert([
            'name' => 'Oblecenie',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tretry',
        ]);
        DB::table('categories')->insert([
            'name' => 'Komponenty',
        ]);
        DB::table('categories')->insert([
            'name' => 'Prislusenstvo',
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
