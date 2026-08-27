<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobDetailsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/job-details/{id}', [JobDetailsController::class, 'show'])
    ->name('job-details');

Route::get('/about-us', [AboutController::class, 'about'])->name('about-us');

Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact-us');
