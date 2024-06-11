@extends('layout.app')

@section('content')
    <h1>Edit Actor</h1>

    <form action="{{ route('actors.update', $actor) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.actors.partials.forms', ['actor' => $actor])
        <button type="submit" class="btn btn-primary">Update Actor</button>
    </form>
@endsection
