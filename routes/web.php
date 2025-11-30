<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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


$slug = fn(string $string) => str_replace(' ', '-', strtolower($string));

$jobs = [
    [
        'id' => 1,
        'title' => 'Junior Laravel Developer',
        'description' => 'Assist in developing and maintaining Laravel applications.',
        'location' => 'Remote',
        'type' => 'Full-time',
    ],
    [
        'id' => 2,
        'title' => 'Senior Laravel Developer',
        'description' => 'Lead the development team and architect Laravel solutions.',
        'location' => 'New York, NY',
        'type' => 'Full-time',
    ],
];

$jobs = array_map(function ($job) use ($slug) {
    $job['slug'] = $slug($job['title']);
    return $job;
}, $jobs);

Route::get('/career', function () use ($jobs) {
    return view('career', [
        'positions' => $jobs,
    ]);
});

Route::get('/career/{job}', function ($route) use ($jobs, $slug) {
    $job = Arr::first($jobs, fn(array $job) => $job['id'] == $route || $slug($job['title']) === $route);
    return view("job-details.{$job['slug']}", $job);
});
