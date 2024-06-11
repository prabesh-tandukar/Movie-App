@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>Rating: {{ $movie->rating }}%</p>
    <p>Release Date: {{ $movie->release_date }}</p>
    <p>Description: {{ $movie->description }}</p>

    <img src="{{ asset('storage/' . $movie->main_image) }}" alt="{{ $movie->title }}">
    
    @if ($movie->other_images)
        <h3>Other Images:</h3>
        @foreach ($movie->other_images as $image)
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $movie->title }}">
        @endforeach
    @endif

    <h3>Actors:</h3>
    <ul>
        @foreach ($movie->actors as $actor)
            <li><a href="{{ route('actors.show', $actor) }}">{{ $actor->name }}</a></li>
        @endforeach
    </ul>
@endsection
