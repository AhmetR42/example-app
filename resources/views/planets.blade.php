<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Planeten</title>
</head>
<body>
    <h1>Alle planeten</h1>

    @foreach ($planeten as $planeet)
        <div>
            <h2>{{ $planeet->name }}</h2>

            <p>
                {{ $planeet->description }}
            </p>

            <p>
                <strong>Grootte:</strong>
                {{ $planeet->size_in_km }} km
            </p>

            <p>
                <strong>Zonnestelsel:</strong>
                {{ $planeet->solar_system?->name }}
            </p>

            <a href="/planets/{{ $planeet->name }}">
                Bekijk {{ $planeet->name }}
            </a>
        </div>

        <hr>
    @endforeach
</body>
</html>