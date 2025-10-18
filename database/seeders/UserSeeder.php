<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'superadmin',
            'password' => Hash::make('super1234'),
            'role'     => 'SUPERADMIN',
            'Key'      => env('SUPERADMIN_ROLE_KEY'),
        ]);

        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin1234'),
            'role'     => 'ADMIN',
            'Key'      => env('ADMIN_ROLE_KEY'),
        ]);

        User::create([
            'username' => 'editor',
            'password' => Hash::make('editor1234'),
            'role'     => 'EDITOR',
            'Key'      => env('EDITOR_ROLE_KEY'),
        ]);

    }
}
