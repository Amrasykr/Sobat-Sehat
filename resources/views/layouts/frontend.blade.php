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
    <script src="./node_modules/preline/dist/preline.js">
            document.addEventListener('DOMContentLoaded', function () {
            var dropdownButton = document.getElementById('hs-dropdown-with-header');
            var dropdownMenu = document.querySelector('.hs-dropdown-menu');

            // Fungsi untuk menutup dropdown saat mengklik di luar dropdown
            function closeDropdown(event) {
                if (!dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.remove('hs-dropdown-open');
                    document.removeEventListener('click', closeDropdown);
                }
            }

            // Tambahkan event listener untuk membuka dropdown saat tombol diklik
            dropdownButton.addEventListener('click', function (event) {
                event.stopPropagation(); // Agar klik di tombol tidak menutup dropdown
                dropdownMenu.classList.toggle('hs-dropdown-open');

                // Tambahkan event listener untuk menutup dropdown saat mengklik di luar dropdown
                if (dropdownMenu.classList.contains('hs-dropdown-open')) {
                    document.addEventListener('click', closeDropdown);
                }
            });
        });
    </script>

</body>

</html>
