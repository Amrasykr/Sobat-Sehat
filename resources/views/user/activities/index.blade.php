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
                        <button class="btn" style="background-color: #2BA6CC;">Mulai Mencari Kegiatan!</button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-[repeat(auto-fit,minmax(15rem,1fr))] gap-4 py-10 px-10 max-w-[64rem] m-auto">
                <!-- Card 1 -->
                @foreach ($activities as $activity)
                    <a href="{{ route('user.activities.show', ['id' => $activity->id]) }}">
                        <div class="card max-w-[20rem] bg-base-100 shadow-xl">
                            <figure class="p-2">
                                <div class="bg-slate-100 border-0 h-100 min-h-[200px] w-full rounded-xl">
                                    <img src="{{ asset('assets/img/activities/' . $activity->image) }}" alt=""
                                        class="bg-slate-100 border-0 object-contain">
                                </div>
                            </figure>
                            <div class="card-body">
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
                        </div>
                    </a>
                @endforeach



            </div>

        </div>

@endsection