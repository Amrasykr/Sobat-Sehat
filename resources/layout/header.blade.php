<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                 }
            .navbar {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 999; /* Menentukan stacking order agar header tetap di atas konten lainnya */
                /* Tambahkan gaya CSS lain yang diperlukan */
            }
            .content {
                /* Tambahkan padding-top untuk mengimbangi tinggi header agar konten tidak tertutupi oleh header */
                padding-top: 80px; /* Misalnya, jika tinggi header adalah 80px */
                /* Tambahkan gaya CSS lain yang diperlukan */
  }

        </style>
        
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    </head>
    <body class="antialiased">

    <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

        <div class="navbar bg-base-100 flex justify-between items-center px-14 py-4 shadow-lg" style="background-color: #f2f7ff; ">
            <!-- Logo & Navbar -->
            <div class="flex items-center">
                <div class="flex-1">
                    <a href="#">
                        <img src="/img/sobat-sehat-horizontal.svg" alt="Logo Sobat Sehat" class="h-20">
                    </a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-9">
                        <li>
                            <a class="text-base font-semibold" style="color: #2BA6CC;" 
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'" 
                                href="#">Beranda
                            </a>
                        </li>
                        <li class="relative">
                            <details>
                                <summary class="text-base font-semibold" style="color: #2BA6CC;" 
                                    onmouseover="this.style.color='#11B621'" 
                                    onmouseout="this.style.color='#2BA6CC'" 
                                    href="#">Kegiatan
                                </summary>
                                <ul class="p-3 bg-white rounded-lg shadow-md absolute top-full left-0 mt-2">
                                    <li><a class="text-gray-800 hover:text-blue-600 transition duration-300">Kesehatan</a></li>
                                    <li><a class="text-gray-800 hover:text-blue-600 transition duration-300">Olahraga</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="relative">
                            <details>
                                <summary class="text-base font-semibold" style="color: #2BA6CC;" 
                                    onmouseover="this.style.color='#11B621'" 
                                    onmouseout="this.style.color='#2BA6CC'" 
                                    href="#">Berita
                                </summary>
                                <ul class="p-3 bg-white rounded-lg shadow-md absolute top-full left-0 mt-2">
                                    <li><a class="text-gray-800 hover:text-blue-600 transition duration-300">Kesehatan</a></li>
                                    <li><a class="text-gray-800 hover:text-blue-600 transition duration-300">Olahraga</a></li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </div>
            </div>
        
            <!-- Search & Profile -->
            <div class="flex gap-2 items-center">
                <div class="flex items-center pr-4"> <!-- Bagian pencarian -->
                    <div class="form-control flex items-center  relative rounded-full">
                        <input type="text" placeholder="Cari Kegiatan!" 
                            class="input input-bordered w-90 md:w-96"
                            style="color: #2BA6CC; ::placeholder { color: #11B621; }"
                        >
                    </div>
                </div>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-20 rounded-full">
                            <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between" style="color: #2BA6CC;" 
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'">
                                Profile
                                <span class="badge bg-primary-500 text-white">New</span>
                            </a>
                        </li>
                        <li><a style="color: #2BA6CC;" 
                            onmouseover="this.style.color='#11B621'" 
                            onmouseout="this.style.color='#2BA6CC'">Settings</a></li>
                        <li><a style="color: #2BA6CC;" 
                            onmouseover="this.style.color='#11B621'" 
                            onmouseout="this.style.color='#2BA6CC'">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
            
        