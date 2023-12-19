<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="lemon-background">


    {{-- navigation --}}
    <x-nav />
    {{-- navigation --}}

    <main class="">
        <div id="hero" class="py-4 max-w-5xl container mx-auto mb-16">
            <div class="">
                <h1 class="font-bold text-6xl">
                    <span class="text-blue-400">SOBAT</span>
                    <br>
                    <span class="text-green-400 ml-10 ">SEHAT</span>
                </h1>
                <p class="text-blue-400 max-w-md border-b-2 border-blue-400 py-8 mb-8">
                    Sobat Sehat, teman setia dalam menjelajahi dunia kesehatan dan olahraga, memberikan peluang untuk
                    menemukan
                    kegiatan bermanfaat dan menyediakan informasi terkini untuk gaya hidup sehatmu
                </p>
            </div>
            <div class="flex gap-8">
                <img class="max-w-sm min-w-0" src="{{ asset('images/header-1.png') }}"alt="">
                <img class="max-w-sm min-w-0" src="{{ asset('images/header-2.png') }}"alt="">
                <img class="max-w-sm min-w-0" src="{{ asset('images/header-3.png') }}"alt="">
            </div>
        </div>
        <section class="py-4 bg-white/50 backdrop-blur-sm ">
            <div class="max-w-5xl container mx-auto">
                <h3 class="text-cyan-500 font-bold uppercase text-3xl text-center mb-10">Berita dan kegiatan</h3>
                <p class="text-blue-400 text-center text-lg mb-4">Temukan Kegiatan, Berita dan Informasi <br> yang
                    sesuai
                    dengan diri anda</p>
                <div class="flex gap-16 mt-10">
                    <x-card-activity day="Senin" photo-url="{{ asset('images/header-1.png') }}" url="/activity/1" />
                    <x-card-activity day="Selasa" photo-url="{{ asset('images/header-2.png') }}" url="/activity/1" />
                    <x-card-activity day="Rabu" photo-url="{{ asset('images/header-3.png') }}" url="/activity/1" />
                </div>
        </section>
    </main>

    {{-- TODO: Footer --}}
</body>

</html>
