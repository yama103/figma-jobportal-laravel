<?php

namespace App\Http\Controllers;

use App\Data\JobData;

class HomeController extends Controller
{
  public function home()
  {
    $jobs = collect(JobData::all());

    $categories = $jobs->groupBy('category')->map(function ($jobs) {
      return $jobs->count();
    });

    return view('home', [
      'jobs' => $jobs,
      'categories' => $categories,
    ]);
  }
}
