<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobDetailsController extends Controller
{
    public function show($id)
    {
        $job = Job::findOrFail($id);

        $relatedJobs = Job::where('category', $job->category)
            ->where('id', '!=', $job->id)
            ->take(3)
            ->get();

        return view('job-details', [
            'job' => $job,
            'relatedJobs' => $relatedJobs,
        ]);
    }
}
