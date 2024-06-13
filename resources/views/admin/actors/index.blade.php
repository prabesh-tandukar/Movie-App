@extends('layout.app')

@section('content')
<div class="mx-20">
    <h1 class="text-3xl my-10">Actors</h1>
    <a href="{{ route('actors.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Actor</a>

    @if ($actors->count())
        <table class="table my-10">
            <thead >
                <tr>
                    <th class="border-2 px-4 py-2">Name</th>
                    <th class="border-2 px-4 py-2">Birthday</th>
                    <th class="border-2 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actors as $actor)
                    <tr>
                        <td class="border-2 px-4 py-2">{{ $actor->name }}</td>
                        <td class="border-2 px-4 py-2">{{ $actor->birthday }}</td>
                        <td class="border-2 px-4 py-2">
                            <a href="{{ route('actors.edit', $actor) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('actors.destroy', $actor) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                            <a href="{{ route('actors.show', $actor) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No actors found</p>
    @endif
</div>
@endsection
