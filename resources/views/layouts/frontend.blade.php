<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>


    {{-- navigation --}}
    <x-nav />
    {{-- navigation --}}

    @yield("content")
    
    {{-- footer --}}
    <x-footer />
    {{-- footer --}}

</body>

</html>
