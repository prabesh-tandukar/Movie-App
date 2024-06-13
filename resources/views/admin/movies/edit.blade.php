@extends('layout.app')

@section('content')
<div class="mx-20">
    <div class="flex justify-between items-center my-10 mb-4">
        <h1 class="text-2xl font-bold">Edit Movie</h1>
        <a href="{{ route('actors.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Movies</a>
    </div>
    
        <form action="{{ route('movies.update', $movie) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.movies.partials.forms', ['movie' => $movie])
            <button type="submit" class="btn btn-primary">Update Movie</button>
        </form>
</div>
@endsection
