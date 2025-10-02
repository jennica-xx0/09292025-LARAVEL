<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 employers, each with 20 jobs = 200 jobs total
        Employer::factory()
            ->count(10)
            ->has(Job::factory()->count(20))
            ->create();
    }
}
