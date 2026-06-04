<x-layout>
    <x-slot name="title">Laravel | Edit Job Listing</x-slot>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">
            Edit Job Listing
        </h2>
        <form method="POST" action="{{route('jobs.update', $job->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>
            {{-- Title --}}
            <x-inputs.text id="title" label="Job Title" name="title" placeholder="Software Engineer" :value="old('title', $job->title)"/>
            {{-- Description --}}
            <x-inputs.text-area id="description" label="Job Description" name="description" :value="old('description', $job->description)"
                placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />
            {{-- Salary --}}
            <x-inputs.text id="salary" label="Annual Salary" name="salary" type="number" placeholder="90000" :value="old('salary', $job->salary)"/>
            {{-- Requirements --}}
            <x-inputs.text-area id="requirements" label="Requirements" name="requirements" rows="2" :value="old('requirements', $job->requirements)"
                placeholder="Bachelor's degree in Computer Science" />
            {{-- Benefits --}}
            <x-inputs.text-area id="benefits" label="Benefits" name="benefits" rows="2" :value="old('benefits', $job->benefits)"
                placeholder="Health insurance, 401k, paid time off" />
            {{-- Tags --}}
            <x-inputs.text id="tags" label="Tags (comma-separated)" name="tags" :value="old('tags', $job->tags)"
                placeholder="development,coding,..." />
            {{-- Job Type --}}
            <x-inputs.select id="job_type" name="job_type" label="Job Type" value="{{ old('job_type', $job->job_type) }}" :options="[
                'Full-Time' => 'Full-Time',
                'Part-Time' => 'Part-Time',
                'Contract' => 'Contract',
                'Temporary' => 'Temporary',
                'Internship' => 'Internship',
                'Volunteer' => 'Volunteer',
                'On-Call' => 'On-Call',
            ]" />
            {{-- Remote --}}
            <x-inputs.select id="remote" name="remote" label="Remote" :options="[
                0 => 'No',
                1 => 'Yes',
            ]" :value="old('remote', $job->remote)" />
            {{-- Adrdess --}}
            <x-inputs.text id="address" label="Address" name="address" placeholder="123 Main" :value="old('address', $job->address)"/>
            {{-- City --}}
            <x-inputs.text id="city" label="City" name="city" placeholder="Albany" :value="old('city', $job->city)"/>
            {{-- State --}}
            <x-inputs.text id="state" label="State" name="state" placeholder="NY" :value="old('state', $job->state)" />
            {{-- Zipcode --}}
            <x-inputs.text id="zipcode" label="Zipcode" name="zipcode" placeholder="89436" :value="old('zipcode', $job->zipcode)"/>

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>
            {{-- Company Name --}}
            <x-inputs.text id="company_name" label="Company Name" name="company_name" placeholder="Company name" :value="old('company_name', $job->company_name)"/>
            {{-- Company Description --}}
            <x-inputs.text-area id="company_description" label="Company Description" name="company_description" :value="old('company_description', $job->company_description)"
                rows="2" placeholder="Company description" />
            {{-- Company Website --}}
            <x-inputs.text id="company_website" label="Company Website" name="company_website" type="url" :value="old('company_website', $job->company_website)"
                placeholder="Company website" />
            {{-- Contact Phone --}}
            <x-inputs.text id="contact_phone" label="Contact Phone" name="contact_phone" placeholder="Contact phone" :value="old('contact_phone', $job->contact_phone)"/>
            {{-- Contact Email --}}
            <x-inputs.text id="contact_email" label="Contact Email" name="contact_email" type="email" :value="old('contact_email', $job->contact_email)"
                placeholder="Contact email" />
            {{-- Company Logo --}}
            <x-inputs.file id="company_logo" name="company_logo" label="Company Logo" :value="old('company_logo', $job->company_logo)"/>
            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>
