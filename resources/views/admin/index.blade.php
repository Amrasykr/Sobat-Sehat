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
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <img src="/img/sobatsehat-vertical.svg" alt="Logo Sobat Sehat" class="h-20 ml-24"> 
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px]  text-gray-200 font-bold ml-14">Ammar Asysyakur</span>
      </div>
      <span class="badge badge-ghost badge-sm">Admin</span>

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
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Berita
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Buat Berita
        </h1>
      </h1>
      <a href="{{ route('admin.activities') }}">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Kegiatan
        </h1> 
    </a>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Buat Kegiatan
        </h1>
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


    <div class="flex-1 flex justify-center items-center ml-64 mb-80">
        <div class="overflow-x-auto">
            <table class="table" style="background-color: #e9e9e9; color: black;">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Deskription</th>
                        <th>Location</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-12 h-12">
                                        <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Hart Hagerty</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Zemlak, Daniel and Leannon
                        </td>
                        <td>Purple</td>
                        <td class="flex">
                            <a href="" class="btn btn-primary btn-sm mx-3">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form method="post" action="#">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-error btn-sm">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
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