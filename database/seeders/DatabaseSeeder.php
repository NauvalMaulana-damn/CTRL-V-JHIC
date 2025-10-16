<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(EkskulSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AlumniSeeder::class);
        $this->call(PrestasiSeeder::class);
        $this->call(PendaftaranSeeder::class);
    }
}
