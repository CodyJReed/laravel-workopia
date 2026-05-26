<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Available Jobs.</h1>';
});
// Response class/response helper exercise
Route::get('/text', function() {
    return response()->json([
        'title' => 'test'
    ], 201)->cookie('name', 'jane doe');
});
// Downloads
Route::get('/download', function() {
    return response()->download(public_path('favicon.ico'));
});
// Cookie retrieval
Route::get('/read-cookie', function(Request $request) {
    $cookieValue = $request->cookie('name');
    return response()->json([
        'cookie' => $cookieValue
    ]);
});
