@extends('layout')

@section('title')
Create Jobs
@endsection

@section('content')
    <h1>Job Creation</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input name="title" placeholder="title" />
        <input name="description" placeholder="description" />
        <button type="submit">Submit</button>
    </form>
@endsection
