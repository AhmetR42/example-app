<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Planets</title>
</head>
<body>

<h1>Planets</h1>

<ul>
    @foreach($planets as $planet)
        <li>
            <h2>{{ $planet['name'] }}</h2>
            <p>{{ $planet['description'] }}</p>
        </li>
    @endforeach
</ul>

</body>
</html>