<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;

class HomeController extends Controller
{   
    // @desc Show Home page
    // @route GET /index
    public function index(): View
    {
        $jobs = Job::latest()->limit(6)->get();

        return view('pages.index')->with('jobs', $jobs);
    }
}
