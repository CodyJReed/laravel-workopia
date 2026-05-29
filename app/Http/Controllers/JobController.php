<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
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
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(string $id)
    {

        return "Showing Job $id";
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "$title : $description";
    }
}
