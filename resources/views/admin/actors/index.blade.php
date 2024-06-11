@extends('layout.app')

@section('content')
    <h1>Actors</h1>
    <a href="{{ route('actors.create') }}" class="btn btn-primary">Add Actor</a>

    @if ($actors->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actors as $actor)
                    <tr>
                        <td>{{ $actor->name }}</td>
                        <td>{{ $actor->birthday }}</td>
                        <td>
                            <a href="{{ route('actors.edit', $actor) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('actors.destroy', $actor) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('actors.show', $actor) }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No actors found</p>
    @endif
@endsection
