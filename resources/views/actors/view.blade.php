@extends('layout.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ asset('storage/' .$actor->image) }}" alt="profile image" class="w-76">
               
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $actor->name }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 448 512"><path d="M448 384c-28.02 0-31.26-32-74.5-32-43.43 0-46.825 32-74.75 32-27.695 0-31.454-32-74.75-32-42.842 0-47.218 32-74.5 32-28.148 0-31.202-32-74.75-32-43.547 0-46.653 32-74.75 32v-80c0-26.5 21.5-48 48-48h16V112h64v144h64V112h64v144h64V112h64v144h16c26.5 0 48 21.5 48 48v80zm0 128H0v-96c43.356 0 46.767-32 74.75-32 27.951 0 31.253 32 74.75 32 42.843 0 47.217-32 74.5-32 28.148 0 31.201 32 74.75 32 43.357 0 46.767-32 74.75-32 27.488 0 31.252 32 74.5 32v96zM96 96c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40z"/></svg>
                    <span class="ml-2">{{ $actor->birthday }}</span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $actor->description }}
                </p>

                <h4 class="font-semibold mt-12">Known For</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach ($actor->movies as $movie)
                        <div class="mt-4">
                            <a href="{{ route('movies.showClient', ['id' => $movie->id]) }}"><img src="{{ asset('storage/' . $movie->main_image) }}" alt="{{ $movie->title }}" class="hover:opacity-75 transition ease-in-out duration-150"></a>
                            <a href="{{ $movie['linkToPage'] }}" class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">{{ $movie->title }}</a>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div> <!-- end movie-info -->




@endsection
