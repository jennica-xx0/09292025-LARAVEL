<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Home page
Route::get('/', function () {
    return view('home');
});

// Jobs index page
Route::get('/jobs', function () {
    $jobs = Job::with('employer')
        ->latest() // order by created_at DESC
        ->simplePaginate(3);
 
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Show create form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store new job
Route::post('/jobs', function () {
    // validation
    request()->validate([
        'title' => 'required|string|max:255',
        'salary' => 'required|string|max:255',
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1 // for now hardcoded
    ]);

    return redirect('/jobs');
});

// Show single job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    return view('jobs.show', ['job' => $job]);
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});
