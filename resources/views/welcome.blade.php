<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sobat Sehat :: Beranda </title>



        <!-- Styles -->
        <style>
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                 }
            .navbar {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 999; /* Menentukan stacking order agar header tetap di atas konten lainnya */
                /* Tambahkan gaya CSS lain yang diperlukan */
            }
            .content {
                /* Tambahkan padding-top untuk mengimbangi tinggi header agar konten tidak tertutupi oleh header */
                padding-top: 80px; /* Misalnya, jika tinggi header adalah 80px */
                /* Tambahkan gaya CSS lain yang diperlukan */
  }

        </style>
        
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    </head>
    <body  >

    <div class="bg-cover bg-center" style="background-image: url('/img/landingpage-bg.svg')">

        <div class="navbar bg-base-100 flex justify-between items-center px-14 py-4 shadow-lg" style="background-color: #f2f7ff; ">
            <!-- Logo & Navbar -->
            <div class="flex items-center">
                <div class="flex-1">
                    <a href="#">
                        <img src="/img/sobat-sehat-horizontal.svg" alt="Logo Sobat Sehat" class="h-20">
                    </a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-9">
                        <li>
                            <a class="text-base font-semibold" style="color: #2BA6CC;" 
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'" 
                                href="{{ url('/') }}">Beranda
                            </a>
                        </li>
                        <li>
                            <a class="text-base font-semibold" style="color: #2BA6CC;" 
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'" 
                                href="{{ route('user.activities') }}">Kegiatan
                            </a>
                        </li>
                        <li>
                            <a class="text-base font-semibold" style="color: #2BA6CC;" 
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'" 
                                href="{{ route('user.news') }}">Berita
                            </a>
                        </li>
                        <li>
                            <a class="text-base font-semibold nav-link" style="color: #2BA6CC;" 
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'" 
                                href="#">Tentang Kami
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        
            <!-- Search & Profile -->
            <div class="flex gap-2 items-center">

                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-20 rounded-full">
                            <img alt="user" src="img/user.png" />
                        </div>
                    </div>
                    <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between" style="color: #2BA6CC;" href="{{route('index.login')}}"
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'">
                                Login
                            </a>
                        </li>
                        <li><a style="color: #2BA6CC;" href="{{route('index.register')}}"
                            onmouseover="this.style.color='#11B621'" 
                            onmouseout="this.style.color='#2BA6CC'">Register</a></li>

                        @if(auth()->check())
                            <li>
                                <a style="color: #2BA6CC;" href="{{ route('admin.dashboard') }}" onmouseover="this.style.color='#11B621'" onmouseout="this.style.color='#2BA6CC'">Dashboard</a>
                            </li>

                            <li><a style="color: #2BA6CC;" {{route('logout')}}
                                onmouseover="this.style.color='#11B621'" 
                                onmouseout="this.style.color='#2BA6CC'">Logout</a></li>
                        @endif
                        
                                

                    </ul>
                </div>
            </div>
        </div>
            

          
          <div class="hero min-h-screen pt-12">
            <div class="hero-overlay bg-opacity-70"></div>
            <div class="hero-content flex-col lg:flex-row-reverse">
                <div class="carousel carousel-center max-w-md p-4 space-x-10  rounded-box mx-10">
                    <div class="carousel-item">
                      <img src="img/foto-1.svg" class="rounded-box" />
                    </div> 
                    <div class="carousel-item">
                      <img src="img/foto2.svg" class="rounded-box" />
                    </div> 
                    <div class="carousel-item">
                      <img src="img/foto-3.svg" class="rounded-box" />
                    </div> 
                  </div>
                <div class="" >
                    <h1 class="mb-5 text-7xl font-bold text-white">
                        Hallo
                        <span style="color: #2BA6CC;">Sobat </span>
                        <span style="color: #11B621;">Sehat!</span>
                    </h1>
                    <p class="text-white text-2xl leading-relaxed">
                        Sobat Sehat, teman setia dalam menjelajahi dunia  
                    </p>
                    <p class="text-white text-2xl leading-relaxed">
                        kesehatan dan olahraga, memberikan peluang untuk
                    </p>
                    <p class="text-white text-2xl leading-relaxed">
                        menemukan kegiatan bermanfaat dan menyediakan informasi 
                    </p>
                    <p class="text-white text-2xl leading-relaxed">
                        terkini untuk gaya hidup sehatmu
                    </p>
                    <a href="{{ route('user.activities') }}">
                        <button class="btn mt-10 text-xl " style="background-color: #2BA6CC; color: white;">Cari Kegiatan !</button>
                    </a>
                </div>
              </div>
        </div>

        <div class="mt-32">
            <!-- Konten sebelumnya di atas section -->
        </div>
        
        <section class="pt-16 pb-20 bg-no-repeat bg-center bg-cover rounded-xl" style="background-color: rgba(255, 255, 255, 0.5);"  id="#tentangKami">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold leading-normal capitalize text-center" data-aos="fade-right" data-aos-duration="1500">Mengapa Sobat Sehat?</h2>
                <p class="text-2xl leading-normal font-light text-center mt-4" data-aos="fade-right" data-aos-duration="1500">Sobat Sehat berkomitmen untuk memberikan informasi terkini seputar kesehatan dan olahraga. Kami tidak hanya memberikan informasi, tetapi juga menjadi teman setia dalam menjelajahi dunia kesehatan dan aktivitas olahraga.</p>
        
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-center items-center mt-10 container mx-auto" data-aos="fade-left" data-aos-duration="1500">
                    <div class="card bg-base-100 shadow-xl ">
                        <div class="card-body mx-auto">
                            <img src="img/3d-report.png" alt="Fleksibel" class="w-16 mx-auto mb-4">
                            <h2 class="card-title text-xl font-bold mb-2">Berita Kesehatan Terkini</h2>
                            <p>Dapatkan informasi kesehatan terkini yang relevan dan akurat setiap hari dari Sobat Sehat.</p>
                        </div>
                    </div>
        
                    <div class="card bg-base-100 shadow-xl ">
                        <div class="card-body mx-auto">
                            <img src="img/3d-drugs.png" alt="Aman" class="w-16 mx-auto mb-4">
                            <p class="card-title text-xl font-bold mb-2">Solusi Kesehatan Aman</p>
                            <p>Solusi kesehatan terpercaya untuk perawatan tubuh dan olahraga yang aman dari Sobat Sehat.</p>
                        </div>
                    </div>
        
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body mx-auto">
                            <img src="img/3d-shield.png" alt="Terpercaya" class="w-16 mx-auto mb-4">
                            <h2 class="card-title text-xl font-bold mb-2">Informasi Olahraga Terpercaya</h2>
                            <p>Dapatkan tips dan informasi olahraga yang terpercaya untuk hidup sehat dari Sobat Sehat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="mt-24">

            <section class="pt-16 bg-no-repeat" style="background-color: rgba(255, 255, 255, 0.5);">
                <div class="block md:flex container mx-auto">
                    <div class="flex-initial md:w-2/4 flex items-center" data-aos="fade-right" data-aos-duration="1500">
                        <div class="md:pr-10 px-6">
                            <h2 class="text-4xl font-bold leading-normal capitalize">Temukan Informasi Terbaru</h2>
                            <p class="text-2xl leading-normal mt-3 font-dark">
                                Sobat Sehat memberikan informasi terkini seputar kegiatan dan berita kesehatan, serta olahraga yang bisa Anda nikmati.
                            </p>
                        </div>
                    </div>
            
                    <div class="flex-initial w-full md:w-2/4 px-6 pt-9 md:pt-0 md:px-0" data-aos="fade-left" data-aos-duration="1500">
                        <div class="flex flex-col space-y-8">
                            <div class="flex space-x-8">
                                <!-- Carousel untuk Kegiatan -->
                                <div class="carousel carousel-center max-w-md p-4 space-x-10 rounded-box">
                                    @foreach($activities as $activity)
                                        <div class="carousel-item">
                                            <div class="card w-96 shadow-md" style="background-color: #f2f7ff;">
                                                <figure>
                                                    <img src="{{ asset('assets/img/activities/' . $activity->image) }}" alt="Berita" class="w-full h-80 object-cover" />
                                                </figure>
                                                <div class="card-body">
                                                    <h2 class="card-title text-lg font-semibold mb-2">{{ $activity->title }}</h2>
                                                    <p>{{ $activity->description }}</p>
                                                    <div class="card-actions justify-end">
                                                        <a href="#" class="btn" style="background-color: #2BA6CC; color: white;">Lihat Lebih Lanjut</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
            
                                <!-- Carousel untuk Berita -->
                                <div class="carousel carousel-center max-w-md p-4 space-x-10 rounded-box">
                                    @foreach($news as $new)
                                        <div class="carousel-item">
                                            <div class="card w-96 shadow-md" style="background-color: #f2f7ff;">
                                                <figure>
                                                    <img src="{{ asset('assets/img/news/' . $new->image) }}" alt="Berita" class="w-full h-80 object-cover" />
                                                </figure>
                                                
                                                <div class="card-body">
                                                    <h2 class="card-title text-lg font-semibold mb-2">{{ $new->title }}</h2>
                                                    <p>{{ $new->description }}</p>
                                                    <div class="card-actions justify-end">
                                                        <a href="#" class="btn" style="background-color: #2BA6CC; color: white;">Lihat Lebih Lanjut</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        


        
        
        
        
        

          
            
              <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300" style="color: #2BA6CC;">
                
                <aside class="items-center grid-flow-col">
                    <img src="/img/sobatsehat-vertical.svg" alt="Logo Sobat Sehat" class="h-20">                  <p>Sobat Sehat<br/>Providing reliable tech since 2023</p>
                </aside> 
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


