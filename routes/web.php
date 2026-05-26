<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Available Jobs.</h1>';
});


// Exercise with $request class
Route::get('/tests', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});
// Query params exercise
Route::get('/query', function (Request $request) {
    // ($query) | only($query) | all() |
    //  has($query) |
    //  input($query) <- works with forms && requests
    // except($query) <- filter out provide array
    return $request->all();
});
