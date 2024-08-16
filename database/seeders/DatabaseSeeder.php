<?php

namespace Database\Seeders;

use App\Models\Issues;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Issues::factory()->create([
            'title' => 'Issue#1',
            'description' => 'A problem',
        ]);
    }
}
