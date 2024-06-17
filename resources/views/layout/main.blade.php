<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotten Avocado</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('home') }}">
                        <div class="w-32">Rotten Avocado</div>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('all_movies') }}" class="hover:text-gray-300">Movies</a>
                </li>
                
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route("all_actors") }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                
                
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
