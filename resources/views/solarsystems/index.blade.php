<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Zonnestelsels</title>
</head>
<body>
    <nav>
        <a href="{{ route('planets.index') }}">Alle planeten</a> |
        <a href="{{ route('solarsystems.index') }}">Zonnestelsels</a>
    </nav>

    <h1>Zonnestelsels</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Aantal planeten</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solarSystems as $solarSystem)
                <tr>
                    <td>{{ $solarSystem->id }}</td>
                    <td>{{ $solarSystem->name }}</td>
                    <td>{{ $solarSystem->planets_count }}</td>
                    <td>
                        <a href="{{ route('solarsystems.show', $solarSystem->id) }}">
                            Bekijk zonnestelsel
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>