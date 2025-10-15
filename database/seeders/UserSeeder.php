<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin1234'),
            'role' => 'SUPERADMIN',
            'roleKey' => env('SUPERADMIN_ROLE_KEY'),
        ]);

        User::create([
            'username' => 'editor',
            'password' => Hash::make('editor1234'),
            'role' => 'EDITOR',
            'roleKey' => env('EDITOR_ROLE_KEY'),
        ]);

        User::create([
            'username' => 'viewer',
            'password' => Hash::make('viewer1234'),
            'role' => 'VIEWER',
            'roleKey' => env('VIEWER_ROLE_KEY'),
        ]);
    }
}
