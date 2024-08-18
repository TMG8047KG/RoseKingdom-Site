<?php

namespace Database\Seeders;

use App\Models\Issues;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
        'username' => 'Admin',
        'email' => 'admin@rosekingodm.com',
        'password' => Hash::make('Admin-12345'),
        ]);

        Issues::factory(10)->create();


    }
}
