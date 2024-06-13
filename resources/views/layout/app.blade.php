<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-white text-black">
  <!-- Navbar -->
<nav class="bg-gray-800 text-white h-16 flex items-center justify-between px-4">
    <h1 class="text-lg font-bold">Admin Panel</h1>
    <div>
        <a href="{{ route('actors.index') }}" class="px-4 py-2 mr-2 bg-gray-700 hover:bg-gray-600 text-white rounded">Actors</a>
        <a href="{{ route('movies.index') }}" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded">Movies</a>
    </div>
</nav>

    <div class="container mx-auto">
        @yield('content')
    </div>
    

</body>

</html>
