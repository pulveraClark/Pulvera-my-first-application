<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', fn () => view('home'));

// Jobs index (newest first)
Route::get('/jobs', function () {
    $jobs = Job::with('employer')
               ->orderBy('id', 'desc') // newest jobs appear first
               ->paginate(10);

    return view('jobs.index', compact('jobs'));
});

Route::get('/jobs/create', fn () => view('jobs.create'));

Route::post('/jobs', function () {
    $validatedData = request()->validate([
        'title'  => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    Job::create([
        'title'       => $validatedData['title'],
        'salary'      => $validatedData['salary'],
        'employer_id' => 1,
    ]);

    return redirect('/jobs')->with('success', 'Job created successfully!');
});

Route::get('/jobs/{job}', fn (Job $job) => view('jobs.show', compact('job')));

Route::get('/jobs/{job}/edit', fn (Job $job) => view('jobs.edit', compact('job')));

Route::patch('/jobs/{job}', function (Job $job) {
    $validatedData = request()->validate([
        'title'  => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    $job->update($validatedData);

    return redirect('/jobs/' . $job->id)->with('success', 'Job updated successfully!');
});

Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();

    return redirect('/jobs')->with('success', 'Job deleted successfully!');
});
