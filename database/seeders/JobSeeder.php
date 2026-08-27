<?php

namespace Database\Seeders;

use App\Data\JobData;
use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = JobData::all();

        foreach ($jobs as $job) {
            Job::create([
                'title' => $job['title'],
                'company' => $job['company'],
                'category' => $job['category'],
                'type' => $job['type'],
                'salary' => $job['salary'],
                'location' => $job['location'],
                'experience' => $job['experience'],
                'degree' => $job['degree'],
                'description' => $job['description'],
            ]);
        }
    }
}
