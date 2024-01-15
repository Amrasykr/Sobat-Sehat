@extends('layouts.admin')

@section('content')
    <!-- Card Section -->
    <div class="bg-white rounded-xl shadow dark:bg-slate-900 | max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <form method="POST" action="{{ route('admin.news.update', ['id' => $news->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <!-- Card -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-16">
                <div class="space-y-2">
                    <span for="image" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        Image
                    </span>

                    <label id="drop_image_area"
                        class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-gray-700 ">
                        {{-- field: image --}}
                        <img class="hidden max-h-full max-w-full aspect-square object-contain m-auto" id="preview" src=""
                            alt="preview">
                        <div id="image_label">
                            <input onchange="updatePreview(event);" id="image" name="image" type="file"
                                class="hidden" accept=".jpg, .jpeg, .png">
                            <svg class="w-10 h-10 mx-auto text-gray-400 dark:text-gray-600"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                                <path
                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                            </svg>
                            <span class="mt-2 block text-sm text-gray-800 dark:text-gray-200">
                                Cari di perangkat kamu atau
                                <span class="group-hover:text-blue-700 text-blue-600">
                                    seret dan jatuhkan
                                </span>
                                untuk mengedit, kosongkan untuk gambar sebelumnya
                            </span>
                            <span class="mt-1 block text-xs text-gray-500">
                                Maximum file size is 2 MB
                            </span>
                        </div>
                    </label>
                    <button
                    id="remove-image-button"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Kosongkan Gambar
                    </button>
                </div>

                <div class="sm:col-span-2">
                    <!-- Grid -->
                    <div class="space-y-4 sm:space-y-6">

                        {{-- field: title --}}
                        <div class="space-y-2">
                            <label for="title"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Judul
                            </label>
                            <input id="title" name="title" type="text"
                                class="py-2 px-3 pe-11 block w-full border-2 border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                placeholder="Enter nama Berita"
                                value="{{ $news->title }}">
                        </div>
                        <div class="grid sm:grid-cols-2 gap-4">
                            {{-- field: category --}}
                            <div class="space-y-2">
                                <label for="category"
                                    class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                    Kategori
                                </label>
                                <select id="category" name="category"
                                    class="py-2 px-3 pe-9 block w-full border-2 border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                    <option>Pilih kategori</option>
                                    <option {{ $news->category == 'kesehatan' ? 'selected' : '' }} value="kesehatan">
                                        Kesehatan
                                    </option>
                                    <option {{ $news->category == 'olahraga' ? 'selected' : '' }} value="olahraga">
                                        Olahraga
                                    </option>
                                </select>
                            </div>
                        </div>
                        {{-- field: description --}}
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text text-base-content">Deskripsi</span>
                            </label>
                            <textarea type="text" placeholder="Deskripsi" class="input input-bordered w-full"
                                name="description">{{ $news->description }}</textarea>
                            @error('description')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        {{-- field: source --}}
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text text-base-content">Source</span>
                            </label>
                            <input type="text" placeholder="source" class="input input-bordered w-full" name="source"
                            value="{{ $news->source }}">
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
                </div>
            </div>
        </form>
    </div>
@endsection
