<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Info</title>
</head>
<body>
    <h1>Pokemon Info</h1>
@if(isset($pokemon))
    <h2>{{ strtoupper($pokemon['name']) }}</h2>
    <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">
    <p><strong>Height:</strong> {{ $pokemon['height'] / 10 }} m</p>
    <p><strong>Weight:</strong> {{ $pokemon['weight'] / 10 }} kg</p>
@else
    <p>Pokemon not found...</p>
@endif


</body>
</html>


