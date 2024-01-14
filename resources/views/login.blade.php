@extends('layouts.frontend')

@section('content')
    <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

        <div class="hero min-h-screen flex items-center justify-center">
            <div class="card w-full max-w-sm shadow-2xl" style="background-color: #F2F7FF;">
                <form class="card-body" method="POST" action="{{ route('login') }}">
                    @csrf <!-- Menambahkan token CSRF -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="email" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control mb-5">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="password" class="input input-bordered"
                            required />
                        <label class="label">
                            <a href="{{ route('index.register') }}" class="label-text-alt link link-hover"
                                style="font-size: 0.75rem;">Dont Have Account?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6 flex justify-center">
                        <button type="submit" class="btn text-white" style="background-color: #2BA6CC;">Login</button>
                    </div>
                </form>
            </div>
        </div>

@endsection