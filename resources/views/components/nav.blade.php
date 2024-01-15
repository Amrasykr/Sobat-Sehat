<nav class="">
    <div class="bg-cyan-500 px-4 py-2 md:px-8 md:py-4">
        <div class="max-w-screen-lg mx-auto flex gap-8 justify-between items-center">
            <img class="hidden sm:block sm:w-44" src="{{ asset('./images/logo/logo.png') }}" alt="logo">
            <img class="h-14 bg-white p-2 sm:hidden" src="{{ asset('img/sobatsehat-vertical.svg') }}" alt="logo">
            <div tabindex="0" id="search" class="max-sm:dropdown | flex items-center gap-4 flex-1 max-w-xl">

                    <input tabindex="0" class="max-sm:dropdown-content | p-2 px-4 rounded-full flex-1 focus:outline-none" type="text"
                        aria-label="Filter projects" placeholder="Cari kegiatan atau artikel">

                <div class="btn btn-ghost">
                    <a class="block">
                        <svg class="fill-white w-6 h-auto aspect-square" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 513.749 513.749" style="enable-background:new 0 0 513.749 513.749;"
                            xml:space="preserve" width="512" height="512">
                            <g>
                                <path
                                    d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15   S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0   c12.501-12.501,12.501-32.769,0-45.269L504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160   s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            @auth <!-- Check if the user is logged in -->
                @php
                    $user = auth()->user();
                @endphp

                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn-ghost btn-circle avatar">
                        <div class="w-16 rounded-full">
                            <img alt="User Avatar" src="{{ asset('img/user.png') }}" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52
                        divide-y-2 divider-secondary
                        ">
                        <div class="px-3 py-1 flex justify-between">
                            <p class="text-primary">{{ $user->name }}</p>
                            <span class="badge bg-primary">{{ $user->role }}</span>
                        </div>

                        <ul class="menu menu-sm p-0">
                            <li>
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </ul>
                </div>
            @else
                <div class="flex gap-4 items-center font-bold">
                    <a href="{{ route('index.login') }}" class="btn-primary">LOGIN</a>
                    <a href="{{ route('index.register') }}" class="btn-light">DAFTAR</a>
                </div>
            @endauth


        </div>
    </div>

    <div class="max-w-screen-lg mx-auto">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-circle sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0"
                class="
                    max-sm:menu max-sm:menu-sm max-sm:dropdown-content  max-sm:mt-3 max-sm:z-[1] max-sm:p-2 max-sm:shadow max-sm:bg-base-100 max-sm:rounded-box max-sm:w-52
                    sm:flex sm:w-fit sm:gap-8 sm:px-8 | text-cyan-500 font-bold p-4">
                <li class=""><a class="hover:underline" href="{{ route('homepage') }}">Beranda</a></li>
                <li class=""><a class="hover:underline" href="{{ route('user.activities') }}">Kegiatan</a></li>
                <li class=""><a class="hover:underline" href="{{ route('user.news') }}">Berita</a></li>
                <li class=""><a class="hover:underline" href="{{ route('homepage') }}">Tentang Kami</a></li>
            </ul>
            </details>
        </div>
</nav>
