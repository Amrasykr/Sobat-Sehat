<footer class="bg-cyan-500 text-white">
    <div class="px-8 py-8">
        <div class="lg:flex justify-between items-center max-w-screen-xl mx-auto">
            <div class="flex flex-1 gap-4 w-fit">
                <img src="{{ asset('images/logo/footer-logo.svg') }}" alt="" class="w-16">
                <p class="text-center text-lg font-medium">
                    Tetap sehat dan bahagia <br> bersama kami
                </p>
            </div>

            <div class="border-white border self-stretch max-lg:my-4"></div>

            <div class="w-fit lg:w-64 ">
                <div class="mx-auto w-fit flex flex-col gap-8">
                    <a class="block font-bold" href="">@SobatSehat</a>
                    <a class="block font-bold" href="">SobatSehat</a>
                </div>
            </div>

            <div class="border-white border self-stretch max-lg:my-4"></div>

            <div class="flex gap-8 flex-1 items-center justify-around max-lg:justify-start">
                <nav class="">
                    <ul class="flex gap-1 flex-col w-fit">
                        <li class="p-1 font-bold"><a class="hover:underline" href="{{ route('home') }}">Beranda</a></li>
                        <li class="p-1 font-bold"><a class="hover:underline" href="{{ route('home') }}">Kegiatan</a></li>
                        <li class="p-1 font-bold"><a class="hover:underline" href="{{ route('home') }}">Berita</a></li>
                        <li class="p-1 font-bold"><a class="hover:underline" href="{{ route('home') }}">Tentang Kami</a></li>
                    </ul>
                </nav>

                <a class="btn-light font-bold" href="">SUBSCRIBE</a>
            </div>
        </div>
        <p class="text-center">Copyright 2023 @Sobat Sehat</p>
    </div>
</footer>
