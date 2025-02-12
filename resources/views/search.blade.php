<!DOCTYPE html>
<html lang="es  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Búsqueda de película</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.navigation')
</head>

<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold my-4">Resultados para "{{ $query }}"</h1>
    @if(count($movies) > 0)
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($movies as $movie)
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] ?? '' }}" 
                         class="rounded-lg mb-2" 
                         alt="{{ $movie['title'] }}">
                    <h2 class="text-lg font-semibold">{{ $movie['title'] }}</h2>
                    <p class="text-sm text-gray-400">{{ number_format($movie['vote_average'], 1) }} ⭐</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-400">No se encontraron resultados.</p>
    @endif
</div>
