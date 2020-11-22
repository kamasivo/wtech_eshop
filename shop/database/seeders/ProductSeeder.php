<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // bicykle
        DB::table('products')->insert([
            'name' => 'Trek',
            'description' => 'trek bicykel',
            'size' => 'M',
            'price' => '3999',
            'category_id' => '1',
            'quantity' => '2',
            'brand' => 'Trek',
        ]);
        DB::table('products')->insert([
            'name' => 'BMC ROADMACHINE ULTEGRA DI2',
            'description' => ' bicykel',
            'size' => 'M',
            'price' => '3886',
            'category_id' => '1',
            'quantity' => '4',
            'brand' => 'BMC',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 10 DISC MARINE BLUE',
            'description' => ' bicykel',
            'size' => 'S',
            'price' => '2788',
            'category_id' => '1',
            'quantity' => '2',
            'brand' => 'Scott',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 10 CARBON ONYX BLACK',
            'description' => ' bicykel',
            'size' => 'XL',
            'price' => '1999',
            'category_id' => '1',
            'quantity' => '1',
            'brand' => 'Scott',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 20 DISC PEARL WHITE',
            'description' => 'scott bicykel',
            'size' => 'XXL',
            'price' => '2999',
            'category_id' => '1',
            'quantity' => '1',
            'brand' => 'Scott',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT 30',
            'description' => 'trek bicykel',
            'size' => 'L',
            'price' => '1222',
            'category_id' => '1',
            'quantity' => '5',
            'brand' => 'Scott',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT RC 15 CARBON ONYX BLACK',
            'description' => 'trek bicykel',
            'size' => 'M',
            'price' => '4999',
            'category_id' => '1',
            'quantity' => '3',
            'brand' => 'Scott',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT ADDICT SE DISC',
            'description' => 'trek bicykel',
            'size' => 'M',
            'price' => '3500',
            'category_id' => '1',
            'quantity' => '2',
            'brand' => 'Scott',
        ]);
        DB::table('products')->insert([
            'name' => 'SCOTT CONTESSA SPEEDSTER 15',
            'description' => 'trek bicykel',
            'size' => 'S',
            'price' => '3999',
            'category_id' => '1',
            'quantity' => '4',
            'brand' => 'Scott',
        ]);

        // elektrobicykle
        DB::table('products')->insert([
            'name' => 'Cannondale Trail Neo 3 2020 horský elektrobicykel',
            'description' => '',
            'size' => 'S',
            'price' => '2449',
            'category_id' => '2',
            'quantity' => '5',
            'brand' => 'Cannondale',
        ]);

        DB::table('products')->insert([
            'name' => 'Haibike SDURO HardNine 1.0 400Wh titánová / lime / čierna, model 2020',
            'description' => '',
            'size' => 'M',
            'price' => '1999',
            'category_id' => '2',
            'quantity' => '4',
            'brand' => 'Haibike',
        ]);

        DB::table('products')->insert([
            'name' => 'Ghost Hybride Teru B2.9 riot red / jet black / shadow red, model 2020 ',
            'description' => '',
            'size' => 'M',
            'price' => '2059',
            'category_id' => '2',
            'quantity' => '7',
            'brand' => 'Ghost',
        ]);

        DB::table('products')->insert([
            'name' => 'Rock Machine Blizzard INT2 e30-29, model 2020',
            'description' => '',
            'size' => 'L',
            'price' => '1999',
            'category_id' => '2',
            'quantity' => '1',
            'brand' => 'Rock',
        ]);

        DB::table('products')->insert([
            'name' => 'Haibike SDURO FullSeven 1.0 500Wh antracitová / lime / piesková, model 2020',
            'description' => '',
            'size' => 'XXL',
            'price' => '2999',
            'category_id' => '2',
            'quantity' => '2',
            'brand' => 'Haibike',
        ]);

        // oblecenie 17-23
        DB::table('products')->insert([
            'name' => 'Castelli ALPHA RoS 2 bunda',
            'description' => '',
            'size' => 'XL',
            'price' => '129',
            'category_id' => '3',
            'quantity' => '8',
            'brand' => 'Castelli',
        ]);
        DB::table('products')->insert([
            'name' => 'Castelli nohavice SORPASSO RoS',
            'description' => '',
            'size' => 'S',
            'price' => '169',
            'category_id' => '3',
            'quantity' => '7',
            'brand' => 'Castelli',
        ]);
        DB::table('products')->insert([
            'name' => 'Eleven kompresné podkolienky',
            'description' => '',
            'size' => 'M',
            'price' => '29',
            'category_id' => '3',
            'quantity' => '2',
            'brand' => 'Eleven',
        ]);
        DB::table('products')->insert([
            'name' => 'BBB BWG 21 ControlZone rukavice',
            'description' => '',
            'size' => 'M',
            'price' => '15',
            'category_id' => '3',
            'quantity' => '5',
            'brand' => 'BBB',
        ]);
        DB::table('products')->insert([
            'name' => 'Castelli NANO FLEX 3G návleky',
            'description' => '',
            'size' => 'XL',
            'price' => '39',
            'category_id' => '3',
            'quantity' => '2',
            'brand' => 'Castelli',
        ]);

        // trety
        DB::table('products')->insert([
            'name' => 'Shimano tretry SH-ME301 čierne',
            'description' => '',
            'size' => '42',
            'price' => '60',
            'category_id' => '4',
            'quantity' => '3',
            'brand' => 'Shimano',
        ]);
        DB::table('products')->insert([
            'name' => 'Fizik Infinito R1 - biele/čierne',
            'description' => '',
            'size' => '42',
            'price' => '96',
            'category_id' => '4',
            'quantity' => '2',
            'brand' => 'Fizik',
        ]);
        DB::table('products')->insert([
            'name' => 'Shimano tretry SHXC701 čierne',
            'description' => '',
            'size' => '42',
            'price' => '140',
            'category_id' => '4',
            'quantity' => '5',
            'brand' => 'Shimano',
        ]);
        DB::table('products')->insert([
            'name' => 'Shimano tretry SHAM901 / sivo-modré',
            'description' => '',
            'size' => '43',
            'price' => '180',
            'category_id' => '4',
            'quantity' => '2',
            'brand' => 'Shimano',
        ]);
        DB::table('products')->insert([
            'name' => 'Shimano tretry SHXC300 čierne',
            'description' => '',
            'size' => '44',
            'price' => '150',
            'category_id' => '4',
            'quantity' => '6',
            'brand' => 'Shimano',
        ]);
    }
}
