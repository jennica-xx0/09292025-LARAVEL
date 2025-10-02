<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Billie',
            'last_name' => 'Eilish',
            'email' => 'test@example.com',
        ]);

        $this->call(JobSeeder::class);
    }
}
