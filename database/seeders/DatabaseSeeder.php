<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate the users table
        DB::table('users')->truncate();

        // Truncate the job_listings table
        DB::table('job_listings')->truncate();

        $this->call([
            RandomUserSeeder::class,
            RandomJobSeeder::class,
        ]);
    }
}
