@extends('layout.app')

@section('content')
    <h1>{{ $actor->name }}</h1>
    <p>Birthday: {{ $actor->birthday }}</p>
    <p>Description: {{ $actor->description }}</p>
    <img src="{{ asset('storage/' . $actor->image) }}" alt="{{ $actor->name }}">

    <h3>Movies:</h3>
    <ul>
        @foreach ($actor->movies as $movie)
            <li><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
@endsection
