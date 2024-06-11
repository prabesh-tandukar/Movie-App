@extends('layout.app')

@section('content')
    <h1>Add Actor</h1>

    <form action="{{ route('actors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.actors.partials.forms')
        <button type="submit" class="btn btn-primary">Add Actor</button>
    </form>
@endsection
