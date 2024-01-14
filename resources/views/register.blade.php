@extends('layouts.frontend')

@section('content')
    <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

        <div class="hero min-h-screen flex items-center justify-center pb-20 ">
            <div class="mt-8 card w-full max-w-sm shadow-2xl" style="background-color: #F2F7FF;">
                <div class="card-body">
                    <img src="/img/sobatsehat-vertical.svg" alt="Sobat Sehat Logo" class="mx-auto h-20 mb-5">
                    <h1 class="text-2xl text-center mb-5" style="color: #2BA6CC;">Registrasi Menjadi Kontributor Sobat
                        Sehat</h1>
                    <form action="{{ route('register') }}" method="post">
                        <!-- Ubah action="/register" menjadi route yang sesuai dengan register pada website Sobat Sehat -->
                        @csrf
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Username</span>
                            </label>
                            <input type="text" name="name" placeholder="Ammar Asysakur"
                                class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="email" name="email" placeholder="ammar@gmail.com"
                                class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input type="password" name="password" class="input input-bordered" required />
                        </div>
                        <div class="form-control mt-6 flex justify-center">
                            <button type="submit" class="btn text-white"
                                style="background-color: #2BA6CC;">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection