@extends('layout.app')

@section('content')
<div class="max-w-4xl mx-auto p-4 mx-20">
    <h1 class="text-4xl font-bold mb-4">{{ $movie->title }}</h1>
    <p class="text-xl mb-2">Rating: <span class="font-semibold">{{ $movie->rating }}%</span></p>
    <p class="text-xl mb-2">Release Date: <span class="font-semibold">{{ \Carbon\Carbon::parse($movie->release_date)->format('F d, Y') }}</span></p>
    <p class="text-xl mb-4">Description: <span class="font-light">{{ $movie->description }}</span></p>

    <div class="mb-4">
        <h3 class="text-2xl font-semibold mb-2">Main Image:</h3>
        <img class="w-64 h-auto rounded-lg shadow-lg" src="{{ asset('storage/' . $movie->main_image) }}" alt="{{ $movie->title }}">
    </div>

    @if ($movie->other_images)
        <div class="mb-4">
            <h3 class="text-2xl font-semibold mb-2">Other Images:</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($movie->other_images as $image)
                    <img class="w-64 h-auto rounded-lg shadow-lg" src="{{ asset('storage/' . $image) }}" alt="{{ $movie->title }}">
                @endforeach
            </div>
        </div>
    @endif

    <div class="mb-4">
        <h3 class="text-2xl font-semibold mb-2">Actors:</h3>
        <ul class="list-disc pl-5">
            @foreach ($movie->actors as $actor)
                <li class="mb-2">
                    <a class="text-blue-600 hover:underline" href="{{ route('actors.show', $actor) }}">{{ $actor->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
