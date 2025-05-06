<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F4EBDC] min-h-screen  flex flex-col">

    <div class="flex-1">
        @include('components.navbar')
    </div>
    
    <div class="flex-1">
        @yield('content')
    </div>
    
    <div class="flex-1 flex items-end justify-center">
        @include('components.footer')
    </div>
</body>
</html>