@extends('layout.app')

@section('content')
   <div class="mx-20">
    <div class="flex justify-between items-center my-10 mb-4">
        <h1 class="text-2xl font-bold">Add Actor</h1>
        <a href="{{ route('actors.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Actors</a>
    </div>
    

    <form action="{{ route('actors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.actors.partials.forms')
        <button type="submit" class=" my-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Actor</button>
    </form>
   </div>
@endsection
