<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TmdbService
{
    protected string $baseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.tmdb.base_url',);
        $this->apiKey = config('services.tmdb.api_key',);
    }

    public function fetchPopularMovies(): array
    {
        $response = Http::get("{$this->baseUrl}movie/popular", [
            'api_key' => $this->apiKey,
            'language' => 'es-ES'
        ]);

        return $response->successful() ? $response->json()['results'] : [];
    }
}