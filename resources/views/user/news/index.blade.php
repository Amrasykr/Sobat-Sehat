@extends('layouts.frontend')

@section('content')

    <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

        <div class="hero min-h-screen" >
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
              <div class="max-w-md">
                <h1 class="mb-5 text-7xl font-bold text-white">
                    Hallo
                    <span style="color: #2BA6CC;">Sobat </span>
                    <span style="color: #11B621;">Sehat!</span>
                </h1>
                <p class="mb-5 text-xl">Temukan informasi terbaru seputar kesehatan dan olahraga dalam satu genggaman.</p>
                <a href="#main-section" class="btn" style="background-color: #2BA6CC;">Mulai Membaca Berita!</a>
              </div>
            </div>
          </div>

          <div id="main-section" class="flex flex-wrap justify-center gap-4 py-10">
            <!-- Card 1 -->
            @foreach ($news as $new)
            <a href="#">
                <div class="card w-96 bg-base-100 shadow-xl">
                  <figure class="p-2">
                    <img src="{{ asset('assets/img/news/' . $new->image) }}"
                         alt="Shoes"
                         class="object-contain h-100 w-full rounded-xl">
                  </figure>
                  <div class="card-body">
                    <h2 class="card-title">
                      {{$new->title}}
                      <div class="badge badge-secondary">{{$new->category}} </div>
                    </h2>
                    <p>{{$new->description}}</p>
                    <div class="card-actions justify-end">
                      <div class="badge badge-outline">{{$new->source}}</div>
                      <div class="badge badge-outline">{{ \Carbon\Carbon::parse($new->created_at)->translatedFormat('l, j F Y') }}</div>
                    </div>
                  </div>
                </div>
            </a>
            @endforeach

    </div>


    @endsection