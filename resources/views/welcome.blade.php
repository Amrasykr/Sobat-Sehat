@extends('layouts.frontend')

@section('content')
    <main class="lemon-background" style="background-image: url('{{ asset('images/background/landing.png') }}');">
        <div id="hero" class="p-2 py-4 max-w-5xl container mx-auto mb-16 ">
            <div class="">
                <h1 class="font-bold text-6xl">
                    <span class="text-cyan-500 ">SOBAT</span>
                    <br>
                    <span class="text-green-400 ml-10 ">SEHAT</span>
                </h1>
                <p
                    class="text-cyan-500  max-w-md border-b-2 border-current py-4 px-4 my-8 backdrop-blur-sm bg-white/80
                    rounded-tl-xl rounded-br-xl">
                    Sobat Sehat, teman setia dalam menjelajahi dunia kesehatan dan olahraga, memberikan peluang untuk
                    menemukan
                    kegiatan bermanfaat dan menyediakan informasi terkini untuk gaya hidup sehatmu
                </p>
            </div>
            <div class="flex flex-col md:grid md:grid-cols-3 gap-8">
                <img class="w-2/3 md:w-auto md:max-w-1/3 min-w-0 odd:self-end" src="{{ asset('images/header-1.png') }}"alt="">
                <img class="w-2/3 md:w-auto md:max-w-1/3 min-w-0 odd:self-end" src="{{ asset('images/header-2.png') }}"alt="">
                <img class="w-2/3 md:w-auto md:max-w-1/3 min-w-0 odd:self-end" src="{{ asset('images/header-3.png') }}"alt="">
            </div>
        </div>
        <section class="py-8 bg-white/50 backdrop-blur-sm ">
            <div class="max-w-5xl container mx-auto">
                <h3 class="text-cyan-500 font-bold uppercase text-3xl text-center mb-10">Berita dan kegiatan</h3>
                <p class="text-cyan-500 text-center text-lg mb-4">Temukan Kegiatan, Berita dan Informasi <br> yang
                    sesuai
                    dengan diri anda</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-10 px-3 gap-16">
                    <x-card-activity :imgUrl='asset("assets/img/activities/lari_pagi.jpg")' :day='"djf"' />
                    <x-card-activity :imgUrl='asset("assets/img/activities/lari_pagi.jpg")' :day='"djf"' />
                    <x-card-activity :imgUrl='asset("assets/img/activities/lari_pagi.jpg")' :day='"djf"' />
                </div>
            </div>
        </section>
    </main>
@endsection
