<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Laravel</title>



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

  <body style="background-color: #f2f7ff;">

    <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
      onclick="openSidebar()"
    >
      <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
      <a href="{{ url('/')}}">
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <img src="/img/sobatsehat-vertical.svg" alt="Logo Sobat Sehat" class="h-20 ml-24">
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
    </a>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px]  text-gray-200 font-bold ml-14">{{ Auth::user()->name }}</span>
      </div>
      <span class="badge badge-ghost badge-sm">{{Auth::user()->role;}}</span>

      <div class="my-4 bg-gray-600 h-[1px]"></div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()"
      >
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Kelola</span>
          <span class="text-sm rotate-180" id="arrow">
            <i class="bi bi-chevron-down"></i>
          </span>
        </div>
      </div>
      <div
        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
        id="submenu"
      >
    <a href="{{ route('admin.news')}}">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Berita
        </h1>
    </a>
    <a href="{{ route('admin.news.create')}}">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Buat Berita
        </h1>
    </a>
      <a href="{{ route('admin.activities') }}">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Kegiatan
        </h1>
    </a>
    <a href="{{route('admin.activities.create')}}">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Buat Kegiatan
        </h1>
    </a>
        <a href="{{ route('admin.validation') }}">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Kelola Validasi Akun
          </h1>
      </a>
      </div>

      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-box-arrow-in-right"></i>

            <span class="text-[15px] ml-4 text-gray-200 font-bold"><a href="{{route('logout')}}">Logout</a></span>
      </div>
    </div>





    <div class="flex-1 flex justify-center items-center ml-64 mb-62">
        <div class="overflow-x-auto">
            <form method="POST" action="/admin/news/update/{{ $news->id }}" enctype="multipart/form-data" style="background-color: #e9e9e9; color: black;" class="p-20">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text text-base-content">Title</span>
                        </label>
                        <input type="text"  class="input input-bordered w-full" name="title">
                        @error('title')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>

                            {{-- field: news_date --}}
                            <div class="space-y-2">
                                <label for="created_at"
                                    class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                    Tanggal Kegiatan
                                </label>
                                <input type="date" id="created_at" name="created_at"
                                    class="py-2 px-3 block w-full border-2 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                    value="{{ $news->created_at }}"
                                    >
                            </div>
                        @enderror
                    </div>

                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text text-base-content">Deskripsi</span>
                        </label>
                        <input type="text"  class="input input-bordered w-full" name="description" >
                        @error('description')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text text-base-content">News Link</span>
                        </label>
                        <input type="text"  class="input input-bordered w-full" name="source">
                        @error('source')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <button type="submit"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Edit Berita
                        </button>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-16">
                    <button type="submit" class="btn btn-primary float-right">Buat</button>
                </div>
            </form>

        </div>
    </div>








    <script type="text/javascript">
      function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
      }
      dropdown();

      function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
      }
    </script>
  </body>
</html>
