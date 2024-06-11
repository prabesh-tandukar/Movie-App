@extends('layouts.app')

@section('content')
    <h1>Edit Movie</h1>

    <form action="{{ route('movies.update', $movie) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.movies.partials.form', ['movie' => $movie])
        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>
@endsection
