@extends('layout.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold">{{ $actor->name }}</h1>
        <p>Birthday: {{ $actor->birthday }}</p>
        <p>Description: {{ $actor->description }}</p>
        <img src="{{ asset('storage/' . $actor->image) }}" alt="{{ $actor->name }}" class="mt-4 w-64">

        <h3 class="text-lg font-bold mt:20">Movies:</h3>
        <ul>
            @foreach ($actor->movies as $movie)
                <li><a href="{{ route('movies.show', $movie) }}" class="text-blue-500">{{ $movie->title }}</a></li>
            @endforeach
        </ul>
    </div>
    
@endsection
