<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// All jobs
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

// Single job by ID
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});
