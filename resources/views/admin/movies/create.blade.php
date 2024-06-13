@extends('layout.app')

@section('content')
<div class="mx-20">
    <div class="flex justify-between items-center my-10 mb-4">
        <h1 class="text-2xl font-bold">Add Movies</h1>
        <a href="{{ route('movies.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Movies</a>
    </div>

    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.movies.partials.forms')
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Movie</button>
    </form>
</div>
   
@endsection
