@extends('layout.app')

@section('content')
    <h1>Add Movie</h1>

    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.movies.partials.forms')
        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
@endsection
