<x-layout title="Movies">
    <div class="container my-5">
        <h1 class="text-center">
            Movies
        </h1>
        @foreach ($films as $movie)
        <x-card :data="$movie" route="movies"/>
        @endforeach
</x-layout>