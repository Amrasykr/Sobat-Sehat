@extends('layouts.admin')

@section('content')
    <!-- Table Section -->
    <div class="max-w-[85rem] mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                            <!-- Input -->
                            <div class="sm:col-span-1">
                                <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <input type="text" id="hs-as-table-product-review-search"
                                        name="hs-as-table-product-review-search"
                                        class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                        placeholder="Search">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="sm:col-span-2 md:grow">
                                <div class="flex justify-end gap-x-2">
                                    <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                        <button id="hs-as-table-table-export-dropdown" type="button"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            <svg class="flex-shrink-0 w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                <path
                                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                            </svg>
                                            Export
                                        </button>
                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mt-2 divide-y divide-gray-200 min-w-[12rem] z-10 bg-white shadow-md rounded-lg p-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                                            aria-labelledby="hs-as-table-table-export-dropdown">
                                            <div class="py-2 first:pt-0 last:pb-0">
                                                <span
                                                    class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-gray-600">
                                                    Options
                                                </span>
                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                    href="#">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                        <path
                                                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                    </svg>
                                                    Copy
                                                </a>
                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                    href="#">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                        <path
                                                            d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                                                    </svg>
                                                    Print
                                                </a>
                                            </div>
                                            <div class="py-2 first:pt-0 last:pb-0">
                                                <span
                                                    class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-gray-600">
                                                    Download options
                                                </span>
                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                    href="#">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z" />
                                                        <path
                                                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                    </svg>
                                                    Excel
                                                </a>
                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                    href="#">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z" />
                                                    </svg>
                                                    .CSV
                                                </a>
                                                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                    href="#">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                        <path
                                                            d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                                    </svg>
                                                    .PDF
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hs-dropdown relative inline-block [--placement:bottom-right]"
                                        data-hs-dropdown-auto-close="inside">
                                        <button id="hs-as-table-table-filter-dropdown" type="button"
                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M3 6h18" />
                                                <path d="M7 12h10" />
                                                <path d="M10 18h4" />
                                            </svg>
                                            Filter
                                            <span
                                                class="ps-2 text-xs font-semibold text-blue-600 border-s border-gray-200 dark:border-gray-700 dark:text-blue-500">
                                                1
                                            </span>
                                        </button>
                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mt-2 divide-y divide-gray-200 min-w-[12rem] z-10 bg-white shadow-md rounded-lg dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                                            aria-labelledby="hs-as-table-table-filter-dropdown">
                                            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <label for="hs-as-filters-dropdown-all" class="flex py-2.5 px-3">
                                                    <input type="checkbox"
                                                        class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                        id="hs-as-filters-dropdown-all" checked>
                                                    <span class="ms-3 text-sm text-gray-800 dark:text-gray-200">All</span>
                                                </label>
                                                <label for="hs-as-filters-dropdown-published" class="flex py-2.5 px-3">
                                                    <input type="checkbox"
                                                        class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                        id="hs-as-filters-dropdown-published">
                                                    <span
                                                        class="ms-3 text-sm text-gray-800 dark:text-gray-200">Published</span>
                                                </label>
                                                <label for="hs-as-filters-dropdown-pending" class="flex py-2.5 px-3">
                                                    <input type="checkbox"
                                                        class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                        id="hs-as-filters-dropdown-pending">
                                                    <span
                                                        class="ms-3 text-sm text-gray-800 dark:text-gray-200">Pending</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-slate-800">
                                <tr>
                                    {{-- name --}}
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Name
                                            </span>
                                        </div>
                                    </th>
                                    {{-- email --}}
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Email
                                            </span>
                                        </div>
                                    </th>
                                    {{-- status validasi --}}
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Status Validasi
                                            </span>
                                        </div>
                                    </th>
                                    {{-- action --}}
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Action
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>


                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($contributors as $c)
                                    <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                        {{-- nama -- image --}}
                                        <td class="h-px w-px whitespace-nowrap align-top">
                                            <div class="block p-6">
                                                <div class="flex items-center gap-x-4">
                                                    <div
                                                        class="image-container | bg-gray-200 h-10 w-10 ring-2 ring-offset-2 ring-gray-200 rounded-full overflow-hidden">
                                                        <img class=""
                                                            src="{{ asset("img/user.png") }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <span
                                                            class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                            {{ $c->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- email --}}
                                        <td class="h-px w-px whitespace-nowrap align-center">
                                            <div class="block p-6">
                                                <div class="flex items-center gap-x-4">
                                                    <div>
                                                        <span class="block text-gray-800 dark:text-gray-200 capitalize">
                                                            {{ $c->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- validation --}}
                                        <td class="h-px w-px whitespace-nowrap align-center">
                                            <div class="block p-6">
                                                <div class="flex items-center gap-x-4">
                                                    <div>
                                                        <span class="block text-gray-800 dark:text-gray-200 capitalize">
                                                            @if ($c->validation == 'diterima')
                                                                <span
                                                                    class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="flex-shrink-0 w-3 h-3"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                        <path
                                                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                                                                        <path d="m9 12 2 2 4-4" />
                                                                    </svg>
                                                                    Approved
                                                                </span>
                                                            @elseif ($c->validation == 'ditolak')
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                                                    <svg class="flex-shrink-0 w-3 h-3"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                        <path
                                                                            d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z" />
                                                                        <path d="M12 9v4" />
                                                                        <path d="M12 17h.01" />
                                                                    </svg>
                                                                    Denied
                                                                </span>
                                                            @elseif ($c->validation == 'pending')
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full dark:bg-blue-500/10 dark:text-blue-500">
                                                                    <svg class="flex-shrink-0 w-3 h-3"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                        <line x1="12" x2="12"
                                                                            y1="2" y2="6" />
                                                                        <line x1="12" x2="12"
                                                                            y1="18" y2="22" />
                                                                        <line x1="4.93" x2="7.76"
                                                                            y1="4.93" y2="7.76" />
                                                                        <line x1="16.24" x2="19.07"
                                                                            y1="16.24" y2="19.07" />
                                                                        <line x1="2" x2="6"
                                                                            y1="12" y2="12" />
                                                                        <line x1="18" x2="22"
                                                                            y1="12" y2="12" />
                                                                        <line x1="4.93" x2="7.76"
                                                                            y1="19.07" y2="16.24" />
                                                                        <line x1="16.24" x2="19.07"
                                                                            y1="7.76" y2="4.93" />
                                                                    </svg>
                                                                    Pending
                                                                </span>
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- action --}}
                                        <td class="h-px w-px whitespace-nowrap align-center">
                                            <div class="block p-6">
                                                <div class="flex items-center gap-x-4">
                                                    {{-- accept button --}}
                                                    <button type="button" data-hs-overlay="#accept-modal{{ $c->id }}"
                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-100 fill-green-500 text-green-500  hover:bg-green-500 hover:text-white hover:fill-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24"
                                                            width="512" height="512">
                                                            <path
                                                                d="M12,24c-1.626,0-3.16-.714-4.208-1.959-1.54,.176-3.127-.405-4.277-1.555-1.149-1.15-1.729-2.74-1.59-4.362-1.211-.964-1.925-2.498-1.925-4.124s.714-3.16,1.96-4.208c-.175-1.537,.405-3.127,1.555-4.277,1.15-1.15,2.737-1.733,4.361-1.59,.964-1.21,2.498-1.925,4.124-1.925s3.16,.714,4.208,1.959c1.542-.173,3.127,.405,4.277,1.555,1.149,1.15,1.729,2.74,1.59,4.362,1.211,.964,1.925,2.498,1.925,4.124s-.714,3.16-1.96,4.208c.175,1.537-.405,3.127-1.555,4.277-1.151,1.15-2.741,1.726-4.361,1.59-.964,1.21-2.498,1.925-4.124,1.925Zm-4.127-3.924c.561,0,1.081,.241,1.448,.676,.668,.793,1.644,1.248,2.679,1.248s2.011-.455,2.679-1.248c.403-.479,.99-.721,1.616-.67,1.034,.087,2.044-.28,2.776-1.012,.731-.731,1.1-1.743,1.012-2.776-.054-.624,.19-1.213,.67-1.617,.792-.667,1.247-1.644,1.247-2.678s-.455-2.011-1.247-2.678c-.479-.403-.724-.993-.67-1.617,.088-1.033-.28-2.045-1.012-2.776s-1.748-1.094-2.775-1.012c-.626,.056-1.214-.191-1.617-.669-.668-.793-1.644-1.248-2.679-1.248s-2.011,.455-2.679,1.248c-.404,.479-.993,.719-1.616,.67-1.039-.09-2.044,.28-2.776,1.012-.731,.731-1.1,1.743-1.012,2.776,.054,.624-.19,1.213-.67,1.617-.792,.667-1.247,1.644-1.247,2.678s.455,2.011,1.247,2.678c.479,.403,.724,.993,.67,1.617-.088,1.033,.28,2.045,1.012,2.776,.732,.731,1.753,1.095,2.775,1.012,.057-.005,.113-.007,.169-.007Zm4.928-4.941l4.739-4.568c.397-.383,.409-1.017,.025-1.414-.383-.397-1.016-.409-1.414-.026l-4.752,4.581c-.391,.391-1.022,.391-1.44-.025l-2.278-2.117c-.402-.375-1.036-.353-1.413,.052-.376,.404-.353,1.037,.052,1.413l2.252,2.092c.586,.586,1.357,.879,2.126,.879,.765,0,1.526-.289,2.104-.866Z" />
                                                        </svg>
                                                        <span class="hidden lg:inline">Approve</span>
                                                    </button>

                                                    {{-- reject button --}}
                                                    <button type="button" data-hs-overlay="#reject-modal{{ $c->id }}"
                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-100 fill-red-500 text-red-500  hover:bg-red-500 hover:text-white hover:fill-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path
                                                                d="m15.707,11.707l-2.293,2.293,2.293,2.293c.391.391.391,1.023,0,1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Zm7.293-6.707c0,.553-.448,1-1,1h-.885l-1.276,13.472c-.245,2.581-2.385,4.528-4.978,4.528h-5.727c-2.589,0-4.729-1.943-4.977-4.521l-1.296-13.479h-.86c-.552,0-1-.447-1-1s.448-1,1-1h4.101c.465-2.279,2.485-4,4.899-4h2c2.414,0,4.435,1.721,4.899,4h4.101c.552,0,1,.447,1,1Zm-14.828-1h7.656c-.413-1.164-1.524-2-2.828-2h-2c-1.304,0-2.415.836-2.828,2Zm10.934,2H4.87l1.278,13.287c.148,1.547,1.432,2.713,2.986,2.713h5.727c1.556,0,2.84-1.168,2.987-2.718l1.258-13.282Z" />
                                                        </svg>
                                                        <span class="hidden lg:inline">Deny</span>
                                                    </button>

                                                    {{-- modals --}}
                                                    {{-- accept-modal{{ $c->id }} --}}
                                                    <div id="accept-modal{{ $c->id }}"
                                                        class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden w-full h-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
                                                        <div
                                                            class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                            <div
                                                                class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                                <div
                                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                                    <h3 class="font-bold text-gray-800 dark:text-white">
                                                                        Verifikasi kontributor?
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                        data-hs-overlay="#accept-modal{{ $c->id }}">
                                                                        <span class="sr-only">Tutup</span>
                                                                        <svg class="flex-shrink-0 w-4 h-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M18 6 6 18" />
                                                                            <path d="m6 6 12 12" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="p-4 overflow-y-auto">
                                                                    <p class="mt-1 text-gray-800 dark:text-gray-400">
                                                                        Apakah anda yakin ingin memverifikasi kontributor
                                                                        <br> "{{ $c->name }}"?
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                                    <button type="button"
                                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                        data-hs-overlay="#accept-modal{{ $c->id }}">
                                                                        Batal
                                                                    </button>
                                                                    <form
                                                                        action="{{ route('admin.validation.accepted', ['id' => $c->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('POST')

                                                                        <button type="submit"
                                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                            Konfirmasi
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- reject-modal{{ $c->id }} --}}
                                                    <div id="reject-modal{{ $c->id }}"
                                                        class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden w-full h-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
                                                        <div
                                                            class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                            <div
                                                                class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                                <div
                                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                                    <h3 class="font-bold text-gray-800 dark:text-white">
                                                                        Verifikasi kontributor?
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                        data-hs-overlay="#reject-modal{{ $c->id }}">
                                                                        <span class="sr-only">Tutup</span>
                                                                        <svg class="flex-shrink-0 w-4 h-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M18 6 6 18" />
                                                                            <path d="m6 6 12 12" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="p-4 overflow-y-auto">
                                                                    <p class="mt-1 text-gray-800 dark:text-gray-400">
                                                                        Apakah anda yakin ingin memverifikasi kontributor
                                                                        <br> "{{ $c->name }}"?
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                                    <button type="button"
                                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                        data-hs-overlay="#reject-modal{{ $c->id }}">
                                                                        Batal
                                                                    </button>
                                                                    <form
                                                                        action="{{ route('admin.validation.rejected', ['id' => $c->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('POST')

                                                                        <button type="submit"
                                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                            Konfirmasi
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>



                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            <div class="max-w-sm space-y-3">
                                <select
                                    class="py-2 px-3 pe-9 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option selected>5</option>
                                    <option>6</option>
                                </select>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                        Next
                                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
@endsection
