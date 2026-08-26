<?php

namespace App\Http\Controllers;

use App\Data\JobData;

class JobsController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $description = 'Find your next career opportunity.';

        $jobs = collect(JobData::all());

        return view('jobs', [
            'title' => $title,
            'description' => $description,
            'jobs' => $jobs,
        ]);
    }
}
