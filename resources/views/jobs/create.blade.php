<x-layout>
    <x-slot name="title">Laravel | Create Job</x-slot>
    <h1>Job Creation</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input name="title" placeholder="title" class="bg-white rounded p-2" />
        <input name="description" placeholder="description" class="bg-white rounded p-2"/>
        <button type="submit">Submit</button>
    </form>
</x-layout>
