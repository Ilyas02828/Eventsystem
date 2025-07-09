<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'ilyas02828@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        // Create regular user
        User::create([
            'name' => 'User 1',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
        ]);

        // Call EventSeeder to create events with images
        $this->call([
            EventSeeder::class,
        ]);

        $this->command->info('Database seeded successfully with users and events!');
    }
}
