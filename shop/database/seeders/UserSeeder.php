<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@admin.sk',
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'name' => 'admin2',
            'surname' => 'admin',
            'email' => 'admin2@admin.sk',
            'password' => Hash::make('admin2'),
        ]);
    }
}
