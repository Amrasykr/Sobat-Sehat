<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('root'),
            'validation' => 'diterima',
            'image' => 'default.png',
            'remember_token' => Str::random(10),
         ]);


         \App\Models\User::factory()->create([
            'name' => 'Kontributor',
            'email' => 'kontributor@example.com',
            'password' => Hash::make('root'),
            'image' => 'default.png',
            'remember_token' => Str::random(10),
         ]);

    }
}
