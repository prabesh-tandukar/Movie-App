@extends('layout.main')

@section('content')
    <div class="movie-info">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpg" alt="" class="w-64 md:w-96">
            <div class="md:ml-28">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, THriller</span>
                </div>

                <p class="text-gray-300 mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis distinctio ipsa nobis ipsam eveniet eum quas non iusto dolor velit iure perferendis cupiditate necessitatibus nesciunt, suscipit at. Nemo commodi rem, error reprehenderit, exercitationem doloribus minima omnis hic illo enim dignissimos pariatur corporis animi aspernatur quisquam porro qui et veniam aliquam!</p>
                <div class="mt-12">
                    <div class="text-white font-semibold">Featured Cast</div>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div>
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150" >
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>{{-- end movie info --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl tracking-wider font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400">
                            John Smith
                        </div>
                    </div>
                    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400">
                            John Smith
                        </div>
                    </div>
                    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400">
                            John Smith
                        </div>
                    </div>
                    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400">
                            John Smith
                        </div>
                    </div>
                    
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400">
                            John Smith
                        </div>
                    </div>
                    
                </div> <!-- end cast -->
            </div>
        </div>
    </div>

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py12">
            <div class="text-4xl text-semibold">Images</div>
            <div class="grid grid-cols-3">
                <div class="mt-12 mx-4">
                    <img src="/img/image1.jpg" alt="">
                </div>
                <div class="mt-12 mx-4">
                    <img src="/img/image2.jpg" alt="">
                </div>
                <div class="mt-12 mx-4">
                    <img src="/img/image3.jpg" alt="">
                </div>
                <div class="mt-12 mx-4">
                    <img src="/img/image4.jpg" alt="">
                </div>
                <div class="mt-12 mx-4">
                    <img src="/img/image5.jpg" alt="">
                </div>
                <div class="mt-12 mx-4">
                    <img src="/img/image6.jpg" alt="">
                </div>
                
            </div>
        </div>
        
    </div>
@endsection