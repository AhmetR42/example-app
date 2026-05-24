<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $planeet['title'] }}</title>
</head>
<body>

<nav>
    <a href="{{ route('home') }}">Terug naar home</a>
    |
    <a href="{{ route('planets.index') }}">Bekijk alle planeten</a>
</nav>

<h1>{{ $planeet['title'] }}</h1>

<p>{{ $planeet['description'] }}</p>
<p><strong>Diameter:</strong> {{ $planeet['diameter'] }}</p>

</body>
</html>
