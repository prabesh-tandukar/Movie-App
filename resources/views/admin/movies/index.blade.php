@extends('layout.app')

@section('content')
<div class="mx-20">
    <h1 class="text-3xl my-10">Movies</h1>
    <a href="{{ route('movies.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Movie</a>

    @if ($movies->count())
        <table class="table my-10">
            <thead>
                <tr>
                    <th class="border-2 px-4 py-2">Title</th>
                    <th class="border-2 px-4 py-2">Rating</th>
                    <th class="border-2 px-4 py-2">Genres</th>
                    <th class="border-2 px-4 py-2">Release Date</th>
                    <th class="border-2 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td class="border-2 px-4 py-2">{{ $movie->title }}</td>
                        <td class="border-2 px-4 py-2">{{ $movie->rating }}</td>
                        <td class="border-2 px-4 py-2">{{ $movie->genres }}</td>
                        <td class="border-2 px-4 py-2">{{ $movie->release_date }}</td>
                        <td>
                            <a href="{{ route('movies.edit', $movie) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                            <a href="{{ route('movies.show', $movie) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-20">No movies found</p>
    @endif
</div>
    
@endsection
