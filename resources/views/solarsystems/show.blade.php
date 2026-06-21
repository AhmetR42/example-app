<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>{{ $solarSystem->name }}</title>
</head>
<body>
    <nav>
        <a href="{{ route('planets.index') }}">Alle planeten</a> |
        <a href="{{ route('solarsystems.index') }}">Zonnestelsels</a>
    </nav>

    <h1>{{ $solarSystem->name }}</h1>

    <h2>Planeten in dit zonnestelsel</h2>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Grootte in km</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solarSystem->planets as $planeet)
                <tr>
                    <td>{{ $planeet->name }}</td>
                    <td>{{ $planeet->description }}</td>
                    <td>{{ $planeet->size_in_km }}</td>
                    <td>
                        <a href="{{ route('planets.show', $planeet->name) }}">
                            Bekijk planeet
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>