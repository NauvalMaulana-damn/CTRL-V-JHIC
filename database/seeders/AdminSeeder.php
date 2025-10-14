<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'adminans',
            'password' => bcrypt('admin1234'),
            'roleKey' => 'e27fac2d418c0a3ac2bc5e2441a01cb74cab5e56e59056c6986b5ff67ad1ced9372da943ba7b2872b605ab7f624462a88f1d9b11b1b5e1fc7116d1e41d3ed8f8',
        ]);
    }
}
