<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Películas</h1>

    <!-- Tarjetas de películas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
        <!-- Película 1 -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
            <h2 class="font-bold text-lg text-gray-800 dark:text-gray-100">El Señor de los Anillos</h2>
            <p class="text-gray-600 dark:text-gray-300">Una aventura épica en la Tierra Media.</p>
        </div>

        <!-- Película 2 -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
            <h2 class="font-bold text-lg text-gray-800 dark:text-gray-100">Matrix</h2>
            <p class="text-gray-600 dark:text-gray-300">Un hacker descubre la verdad detrás de su realidad.</p>
        </div>

        <!-- Película 3 -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
            <h2 class="font-bold text-lg text-gray-800 dark:text-gray-100">Inception</h2>
            <p class="text-gray-600 dark:text-gray-300">Sueños dentro de sueños y un equipo de ladrones de ideas.</p>
        </div>

        <!-- Película 4 -->
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
            <h2 class="font-bold text-lg text-gray-800 dark:text-gray-100">Titanic</h2>
            <p class="text-gray-600 dark:text-gray-300">Una historia de amor en medio de una tragedia histórica.</p>
        </div>
    </div>
</div>

</x-app-layout>
