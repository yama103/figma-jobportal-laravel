<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/job-details/{id}', [JobDetailsController::class, 'show'])
    ->name('job-details');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
