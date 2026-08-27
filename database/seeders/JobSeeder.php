<?php

namespace Database\Seeders;

use App\Data\JobData;
use App\Models\Job;
use App\Models\JobResponsibility;
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
            $createdJob = Job::create([
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

            foreach ($job['responsibilities'] as $responsibility) {
                JobResponsibility::create([
                    'job_id' => $createdJob->id,
                    'responsibility' => $responsibility,
                ]);
            }
        }
    }
}
