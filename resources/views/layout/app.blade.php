<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-green-900 text-white">
    <div class="container mx-auto">
        @yield('content')
    </div>
    
</body>
</html>
