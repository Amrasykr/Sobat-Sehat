<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sobat Sehat :: Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                 }
            .footer {
                    /* Pastikan posisi footer tetap di bawah */
                    position: fixed;
                    bottom: 0;
                    width: 100%;
                }

                /* Ubah posisi form login */
                .card {
                    position: fixed;

                }


        </style>
        
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    </head>
    <body>
    <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

        <div class="hero min-h-screen flex items-center justify-center">
            <div class="card w-full max-w-sm shadow-2xl" style="background-color: #F2F7FF;">
                <form class="card-body" method="POST" action="{{ route('login') }}">
                    @csrf <!-- Menambahkan token CSRF -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="email" class="input input-bordered" required />
                    </div>
                    <div class="form-control mb-5">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="password" class="input input-bordered" required />
                        <label class="label">
                            <a href="{{route('register')}}" class="label-text-alt link link-hover" style="font-size: 0.75rem;">Dont Have Account?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6 flex justify-center">
                        <button type="submit" class="btn text-white" style="background-color: #2BA6CC;">Login</button>
                    </div>
                </form>
            </div>
        </div>
        
        
        

    

        <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300" style="color: #2BA6CC;">
            <a href="{{url('/')}}">
            <aside class="items-center grid-flow-col">

                <img src="/img/sobatsehat-vertical.svg" alt="Logo Sobat Sehat" class="h-20">                  <p>Sobat Sehat<br/>Providing reliable tech since 2023</p>
            </aside> 
        </a>
                <nav class="md:place-self-center md:justify-self-end">
                  <div class="grid grid-flow-col gap-4">
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
                    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
                  </div>
                </nav>
              </footer>
            
            
        
    </body>
</html>
