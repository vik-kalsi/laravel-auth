<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> {{ $title }} </title>
</head>

<body class="my-4 grid justify-center">
    
    

    <div class="border-2 p-4">
        {{ $slot }}
    </div>
    
</body>
</html>