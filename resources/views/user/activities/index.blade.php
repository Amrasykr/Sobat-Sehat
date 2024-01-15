@extends('layouts.frontend')

@section('content')

        <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

            <div class="hero min-h-screen">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-7xl font-bold text-white">
                            Hallo
                            <span style="color: #2BA6CC;">Sobat </span>
                            <span style="color: #11B621;">Sehat!</span>
                        </h1>
                        <p class="mb-5 text-xl">Temukan Ragam Kegiatan Kesehatan dan Olahraga yang Anda Butuhkan</p>
                        <a href="#main-section" class="btn" style="background-color: #2BA6CC;">Mulai Mencari Kegiatan!</a>
                    </div>
                </div>
            </div>

            <div id="main-section" class="grid grid-cols-[repeat(auto-fit,minmax(15rem,1fr))] gap-4 py-10 px-10 max-w-[64rem] m-auto">
                <!-- Card 1 -->
                @foreach ($activities as $activity)
                    <a class="block card max-w-[20rem] bg-base-100 shadow-xl" href="{{ route('user.activities.show', ['id' => $activity->id]) }}">
                            <figure class="p-0">
                                <div class="bg-slate-100 border-0 h-100 h-[200px] w-full rounded-xl">
                                    <img src="{{ asset('assets/img/activities/' . $activity->image) }}" alt=""
                                        class="h-full w-full bg-slate-100 border-0 object-cover drop-shadow-lg">
                                </div>
                            </figure>
                            <div class="card-body p-4">
                                <h2 class="card-title">
                                    {{ $activity->title }}
                                </h2>
                                <div class="badge badge-secondary uppercase">{{ $activity->category }}</div>
                                <p class="line-clamp-4">{{ $activity->description }}</p>
                                <div class="card-actions justify-end">
                                    <div class="badge badge-outline">
                                        {{ \Carbon\Carbon::parse($activity->activiy_date)->translatedFormat('l, j F Y') }}
                                    </div>
                                    <div class="badge badge-outline">{{ $activity->user->name }}</div>
                                </div>
                            </div>
                    </a>
                @endforeach



            </div>

        </div>

@endsection
