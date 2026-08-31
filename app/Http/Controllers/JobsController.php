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

        $tag = $request->input('tag');

        if ($tag) {
            $query->whereHas('tags', function ($query) use ($tag) {
                $query->where('tag', $tag);
            });
        }

        $experience = $request->input('experience');

        if ($experience === 'no-experience') {
            $query->where('experience', 0);
        } elseif ($experience === 'fresher') {
            $query->whereBetween('experience', [1, 2]);
        } elseif ($experience === 'intermediate') {
            $query->whereBetween('experience', [3, 5]);
        } elseif ($experience === 'expert') {
            $query->where('experience', '>=', 6);
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



        $categoryCounts = Job::query()
            ->select('category')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('category')
            ->pluck('count', 'category');

        $typeCounts = Job::query()
            ->select('type')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('type')
            ->pluck('count', 'type');

        $experienceCounts = [
            'no-experience' => Job::where('experience', 0)->count(),
            'fresher' => Job::whereBetween('experience', [1, 2])->count(),
            'intermediate' => Job::whereBetween('experience', [3, 5])->count(),
            'expert' => Job::where('experience', '>=', 6)->count(),
        ];

        $jobs = $query->paginate(10);

        return view('jobs', [
            'title' => $title,
            'description' => $description,
            'jobs' => $jobs,
            'categoryCounts' => $categoryCounts,
            'typeCounts' => $typeCounts,
            'experienceCounts' => $experienceCounts,
        ]);
    }
}
