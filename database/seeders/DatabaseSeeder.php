<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * @file
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create(
            [
                'name' => 'Test User',
                'email' => 'test@test.gr',
                'password' => Hash::make('test'),
                'email_verified_at' => null,
            ]
        );
    }
}
