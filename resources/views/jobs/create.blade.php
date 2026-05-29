<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listings</title>
</head>
<body>
    <h1>Job Creation</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input name="title" placeholder="title"/>
        <input name="description" placeholder="description"/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>