<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request)
    {

        $title = 'Available Jobs';
        $description = 'Find your next career opportunity.';

        $query = Job::query();

        $category = $request->input('category');

        if ($category) {
            $query->where('category', $category);
        }

        $job_type = $request->input('job_type');

        if ($job_type) {
            $query->where('type', $job_type);
        }

        $keyword = $request->input('keyword');

        if ($keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->where('title', 'like', "%{$keyword}%")
                    ->orWhere('company', 'like', "%{$keyword}%");
            });
        }

        $location = $request->input('location');

        if ($location) {
            $query->where('location', $location);
        }

        // $salary = $request->input('salary');

        // if ($salary) {
        //     $jobs = $jobs->filter(
        //         function ($job) use ($salary) {
        //             $salaryRange = explode('-', $job['salary']);
        //             $salaryValue = str_replace('$', '', $salaryRange[0]);
        //             $salaryValue = (int) $salaryValue;
        //             return $salaryValue >= $salary;
        //         }
        //     );
        // }

        $jobs = $query->paginate(10);

        return view('jobs', [
            'title' => $title,
            'description' => $description,
            'jobs' => $jobs,
        ]);
    }
}
