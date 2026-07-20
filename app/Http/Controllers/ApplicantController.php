<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    // @desc Store new job application
    // @route POST /jobs/{job}/apply
    public function store(Request $request, Job $job): RedirectResponse
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'contact_phone' => 'string|nullable',
            'contact_email' => 'required|string',
            'message' => 'string|nullable',
            'location' => 'string|nullable',
            'resume' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Handle resume upload
        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes', 'public');
            $validatedData['resume_path'] = $path;
        }

        // Store application
        $application = new Applicant($validatedData);
        $application->job_id = $job->id;
        $application->user_id = Auth::user()->id;
        $application->save();

        return redirect()->back()->with('success', 'Your application has been submitted!');
    }
}
