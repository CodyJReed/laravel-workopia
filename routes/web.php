<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs.index');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});