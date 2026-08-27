<?php

namespace App\Http\Controllers;

use App\Models\Job;

class HomeController extends Controller
{
  public function home()
  {
    $jobs = Job::latest()->take(6)->get();

    $categories = Job::all()
      ->groupBy('category')
      ->map(function ($jobs) {
        return $jobs->count();
      });

    return view('home', [
      'jobs' => $jobs,
      'categories' => $categories,
    ]);
  }
}
