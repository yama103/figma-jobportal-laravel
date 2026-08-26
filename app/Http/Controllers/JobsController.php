<?php

namespace App\Http\Controllers;

use App\Data\JobData;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request)
    {

        $title = 'Available Jobs';
        $description = 'Find your next career opportunity.';

        $jobs = collect(JobData::all());

        $category = $request->input('category');
        if ($category) {
            $jobs = $jobs->filter(function ($job) use ($category) {
                return $job['category'] === $category;
            });
        }

        $job_type = $request->input('job_type');
        if ($job_type) {
            $jobs = $jobs->filter(function ($job) use ($job_type) {
                return $job['type'] === $job_type;
            });
        }

        $keyword = $request->input('keyword');
        if ($keyword) {
            $jobs = $jobs->filter(function ($job) use ($keyword) {
                return str_contains($job['title'], $keyword)
                    || str_contains($job['company'], $keyword);
            });
        }

        $location = $request->input('location');
        if ($location) {
            $jobs = $jobs->filter(function ($job) use ($location) {
                return $job['location'] === $location;
            });
        }

        $salary = $request->input('salary');

        if ($salary) {
            $jobs = $jobs->filter(
                function ($job) use ($salary) {
                    $salaryRange = explode('-', $job['salary']);
                    $salaryValue = str_replace('$', '', $salaryRange[0]);
                    $salaryValue = (int) $salaryValue;
                    return $salaryValue >= $salary;
                }
            );
        }

        return view('jobs', [
            'title' => $title,
            'description' => $description,
            'jobs' => $jobs,
        ]);
    }
}
