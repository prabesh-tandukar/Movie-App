@extends('layout.main')

@section('content')
    <div class="movie-info">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ asset('storage/'. $movie->main_image)  }}" alt="{{ $movie->title }}" class="w-64 md:w-96">
            <div class="md:ml-28">
                <h2 class="text-4xl font-semibold">{{ $movie->title }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="ml-1">{{ $movie->rating }}%</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie->release_date)->format('F d, Y')}}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie->genres }}</span>
                </div>

                <p class="text-gray-300 mt-8">{{ $movie->description }}</p>
                
               
            </div>
        </div>
    </div>{{-- end movie info --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl tracking-wider font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie->actors as $actor)
                <div class="mt-8">
                    <a href="{{ route('actor_detail', $actor['id']) }}">
                        <img src="{{ asset('storage/'.$actor->image) }}" alt="{$actor->name}" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $actor->name }}</a>
                        
                    </div>
                    
                </div>
                @endforeach
                
               
               
                 <!-- end cast -->
            </div>
        </div>
    </div>

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py12">
            <div class="text-4xl text-semibold">Images</div>
            <div class="grid grid-cols-3">
                @foreach ($movie->other_images as $image)
                <div class="mt-12 mx-4">
                    <img src="{{ asset('storage/'.$image) }}" alt="">
                </div>
                @endforeach

                
               
                
            </div>
        </div>
        
    </div>
@endsection