<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Jobs;
use App\Models\Job;

$jobs = new Jobs();

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Thou art welcome to our humble abode!',
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




Route::get('/career', function () use ($jobs) {
    return view('career', [
        'positions' => $jobs->allAsArrays,
    ]);
});

Route::get('/career/{job}', function ($route) use ($jobs) {
    $job = Arr::first(
        $jobs->allAsJobs,
        fn(Job $job) => $job->id == $route || $job->slug === $route
    );

    return view("job", $job->get);
});
