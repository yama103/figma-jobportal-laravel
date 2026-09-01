<?php

namespace Database\Seeders;

use App\Data\JobData;
use App\Models\Job;
use App\Models\JobResponsibility;
use App\Models\JobSkill;
use App\Models\JobTag;
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

            $salary = str_replace('$', '', $job['salary']);
            $salaryParts = explode('-', $salary);

            $createdJob = Job::create([
                'title' => $job['title'],
                'company' => $job['company'],
                'category' => $job['category'],
                'type' => $job['type'],

                'salary_min' => (int) $salaryParts[0],
                'salary_max' => (int) $salaryParts[1],

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

            foreach ($job['skills'] as $skill) {
                JobSkill::create([
                    'job_id' => $createdJob->id,
                    'skill' => $skill,
                ]);
            }
            foreach ($job['tags'] as $tag) {
                JobTag::create([
                    'job_id' => $createdJob->id,
                    'tag' => $tag,
                ]);
            }
        }
    }
}
