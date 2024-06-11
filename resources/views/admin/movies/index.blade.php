@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <a href="{{ route('movies.create') }}" class="btn btn-primary">Add Movie</a>

    @if ($movies->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Rating</th>
                    <th>Release Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->rating }}</td>
                        <td>{{ $movie->release_date }}</td>
                        <td>
                            <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('movies.show', $movie) }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No movies found</p>
    @endif
@endsection
