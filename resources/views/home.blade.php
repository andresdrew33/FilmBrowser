<!DOCTYPE html>
<html lang="es  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Películas Populares</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.navigation')
</head>
<body>
    <header>
        <div class="text-center">
            <h1> Películas populares del momento</h1>
        </div>
    </header>
    <div class="swiper-container">
        <div class="swiper-wrapper">
        @foreach($movies as $movie)
            <div class="swiper-slide">
                <div class="image-container">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" class="img-slide" alt="{{ $movie['title'] }}">
                    <div class="vote-overlay">
                        <span>{{ number_format($movie['vote_average'], 1) }}</span> <!-- Redondear a 1 decimal -->
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</body>
<footer class="bg-gray-900 text-white text-center py-6 mt-12">
    <p>© 2025 Andrés Martín | Desarrollado con ❤️ por Andrés Martín</p>
</footer>
</html>
