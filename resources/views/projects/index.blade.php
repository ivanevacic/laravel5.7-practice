<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel-Development')</title>
</head>
<body>
    <h1>Projects</h1>

    @foreach($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
</body>
</html>