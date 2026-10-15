<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Lumikha ng Admin User
        User::factory()->create([
            'name'     => 'Admin User',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        // 2. Patakbuhin ang ProductSeeder para sa IT Subjects
        $this->call([
            ProductSeeder::class,
        ]);
    }
}