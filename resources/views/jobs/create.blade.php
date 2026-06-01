<x-layout>
    <x-slot name="title">Laravel | Create Job</x-slot>
    <h1>Job Creation</h1>
    <form action="/jobs" method="POST">
        @csrf
        <div class="my-5">
            <input name="title" placeholder="title" class="bg-white rounded p-2" value="{{old('title')}}"/>
            @error('title')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-5">
            <input name="description" placeholder="description" class="bg-white rounded p-2" value="{{old('description')}}"/>
            @error('description')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Submit</button>
    </form>
</x-layout>
