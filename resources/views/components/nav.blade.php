<nav>
    <div class="bg-cyan-500 | px-8 py-4 flex gap-8 justify-between items-center">
        <img class="w-44" src="{{ asset('./images/logo/logo.png') }}" alt="logo">
        <div id="search" class="flex flex-1 max-w-xl">
            <input
                class="p-2 px-4 rounded-full flex-1"
                type="text" aria-label="Filter projects" placeholder="Filter projects...">
            {{-- TODO: search logo white --}}
            <div>search logo</div>
        </div>

        <div class="flex gap-4 items-center font-bold">
            <a href="#" class="bg-cyan-500 text-white | hover:ring-4 hover:ring-white hover:bg-cyan-500 | p-2 px-4 rounded-full">LOGIN</a>
            <a href="#" class=" bg-white text-cyan-500 | hover:ring-4 hover:ring-white hover:bg-cyan-500 hover:text-white | p-2 px-4 rounded-full">DAFTAR</a>
        </div>
    </div>

    <div>
        <ul class="flex gap-8 px-8  | text-cyan-500 font-bold">
            <li class="p-2"><a class="hover:underline" href="">Lorem.</a></li>
            <li class="p-2"><a class="hover:underline" href="">Illo!</a></li>
            <li class="p-2"><a class="hover:underline" href="">Eaque!</a></li>
            <li class="p-2"><a class="hover:underline" href="">Expedita.</a></li>
        </ul>
    </div>
</nav>
