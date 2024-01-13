<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--     <link rel="stylesheet" href="{{ asset('css/app.css') }}">

 --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>



    </style>

</head>

<body>


    {{-- navigation --}}
    <x-nav />
    {{-- navigation --}}

    @yield('content')

    {{-- footer --}}
    <x-footer />
    {{-- footer --}}
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
