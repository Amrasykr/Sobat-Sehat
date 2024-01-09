<nav class="">
    <div class="bg-cyan-500 px-8 py-4">
        <div class="max-w-screen-lg mx-auto flex gap-8 justify-between items-center">
            <img class="w-44" src="{{ asset('./images/logo/logo.png') }}" alt="logo">
            <div id="search" class="flex items-center gap-4 flex-1 max-w-xl">
                <input class="p-2 px-4 rounded-full flex-1 focus:outline-none" type="text" aria-label="Filter projects"
                    placeholder="Cari kegiatan atau artikel">
                <a class="block" href="#">
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

            <div class="flex gap-4 items-center font-bold">
                <a href="{{ route('index.login') }}" class="btn-primary">LOGIN</a>
                <a href="#" class="btn-light">DAFTAR</a>
            </div>
        </div>
    </div>

    <div class="max-w-screen-lg mx-auto">
        <ul class="flex w-fit gap-8 px-8  | text-cyan-500 font-bold">
            <li class="p-2"><a class="hover:underline" href="{{ route('homepage') }}">Beranda</a></li>
            <li class="p-2"><a class="hover:underline" href="{{ route('homepage') }}">Kegiatan</a></li>
            <li class="p-2"><a class="hover:underline" href="{{ route('homepage') }}">Berita</a></li>
            <li class="p-2"><a class="hover:underline" href="{{ route('homepage') }}">Tentang Kami</a></li>
        </ul>
    </div>
</nav>
