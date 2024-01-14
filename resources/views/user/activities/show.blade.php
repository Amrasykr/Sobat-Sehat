@extends('layouts.frontend')

@section('content')


    <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

        <div class="flex px-40 ">
            <!-- Bagian Kiri - Card -->
            <div class="w-1/2 p-4">
                    <div class="card w-100 bg-base-100 shadow-xl ">
                        <figure class="p-2">
                            <img src="{{ asset('assets/img/activities/' . $activities->image) }}"
                                 alt="Image"
                                 class="object-contain h-100 w-full rounded-xl">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">
                                {{$activities->title}}
                                <div class="badge badge-secondary uppercase">{{$activities->category}} </div>
                            </h2>
                            <p>{{$activities->description}}</p>
                            <div class="card-actions justify-end pt-2">
                                <div class="badge badge-outline">{{ \Carbon\Carbon::parse($activities->activiy_date)->translatedFormat('l, j F Y') }}</div>
                                <div class="badge badge-outline">{{$activities->location}}</div>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Bagian Kanan - Maps -->
            <div class="w-1/2 p-4 rounded-xl">
                <div style="position: relative; overflow: hidden; padding-bottom: 75%; border-radius: 15px;">
                    <iframe src="{{$activities->location_link}}"
                            width="100%"
                            height="100%"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; border-radius: 15px;"
                            allowfullscreen=""
                            loading="lazy">
                    </iframe>
                </div>
            </div>
            
        </div>


    </div>

    @endsection