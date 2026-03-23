<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Planets</title>
</head>
<body>

<h1>Alle planeten</h1>

<ul>
    @foreach($planeten as $planeet)
        <li>
            <a href="{{ route('planets.show', ['planet' => $planeet['name']]) }}">
                {{ $planeet['title'] }}
            </a>
        </li>
    @endforeach
</ul>

</body>
</html>
