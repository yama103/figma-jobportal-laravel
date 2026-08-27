<?php

namespace App\Http\Controllers;

use App\Data\JobData;

class JobDetailsController extends Controller
{
    public function show($id)
    {
        $jobs = collect(JobData::all());

        $job = $jobs->first(function ($job) use ($id) {
            return $job['id'] == $id;
        });

        if (!$job) {
            abort(404);
        }

        $relatedJobs = $jobs->reject(function ($item) use ($id) {
            return $item['id'] == $id;
        });

        return view('job-details', [
            'job' => $job,
            'relatedJobs' => $relatedJobs,
        ]);
    }
}
