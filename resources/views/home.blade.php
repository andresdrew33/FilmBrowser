<!DOCTYPE html>
<html lang="es  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas Populares</title>
</head>
<body>
    <h1>Películas Populares</h1>

    <div>
        @foreach($movies as $movie)
            <div>
                <h2>{{ $movie['title'] }}</h2>
                <p>{{ $movie['overview'] }}</p>
                <p><strong>Fecha de estreno:</strong> {{ $movie['release_date'] }}</p>
                <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
            </div>
        @endforeach
    </div>
</body>
</html>
