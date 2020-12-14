<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->insert([
            'name' => 'Bicykle',
        ]);
        DB::table('categories')->insert([
            'name' => 'Elektrobicykle',
        ]);
        DB::table('categories')->insert([
            'name' => 'Oblečenie',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tretry',
        ]);
        DB::table('categories')->insert([
            'name' => 'Komponenty',
        ]);
        DB::table('categories')->insert([
            'name' => 'Príslušenstvo',
        ]);
    }
}
