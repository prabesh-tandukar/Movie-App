@extends('layout.main')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">All Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($actors as $actor)
                    <div class="actor mt-8">
                        <a href="{{ route('actor_detail', $actor['id']) }}">
                            <img src="{{ asset('storage/' . $actor->image) }}" alt="{{ $actor->name }}" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('actors.show', $actor['id']) }}" class="text-lg hover:text-gray-300">{{ $actor->name }}</a>
                            
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        


        
         
    </div>
@endsection


