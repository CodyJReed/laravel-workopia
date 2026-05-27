<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title = 'Available Jobs.';
    $jobs = [
        'Software Dev',
        'DB Admin',
        'Software Eng',
        'Systems Analyst'
    ];
    // Data/State can be pass to templates/pages in a variaty of different ways...
    // As an associative_array within the 'view' method

    // return view('jobs.index', [
    //     'title' => $title
    // ]);

    // ...as comma separated pairs attached to a 'with' method of view
    // return view('jobs.index')->with('title', $title);

    //...using the compact method with the 'view' method
    return view('jobs.index', compact('title', 'jobs'));
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
