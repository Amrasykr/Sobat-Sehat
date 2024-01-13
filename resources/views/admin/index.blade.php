@extends('layouts.admin')

@section('content')
    <div class="divide-y-2 space-y-4">

        {{-- activities --}}
        <div>
            <h1 class="text-3xl mb-5 ">Activities</h1>
            <a href="{{ route('admin.activities') }}" class="block max-w-sm bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        {{-- todo: icon --}}
                    </div>
                    <div class="ml-4">
                        <p class="text-lg font-semibold text-gray-700 max-w-xs">Activities</p>
                        <p class="text-gray-500 mt-2">Total activities created by contributors</p>
                        <p class="text-2xl font-bold mt-2 text-blue-500">{{ count($activities) }}</p>
                    </div>
                </div>
            </a>
        </div>

        {{-- contributors --}}
        <div>
            <h1 class="text-3xl mb-5">Contributors</h1>
            <div class=" mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                <!-- User Card -->
                <a href="{{ route('admin.validation') }}" class="bg-blue-100 ring-2 ring-blue-200 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            {{-- todo: icon --}}
                        </div>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-gray-700">Total Contributors</p>
                            <p class="text-gray-500 mt-2">Total registered contributors</p>
                            <p class="text-2xl font-bold mt-2 text-info">{{ count($contributors) }}</p>
                        </div>
                    </div>
                </a>
                <!-- User Card -->
                <a href="{{ route('admin.validation') }}" class="bg-green-100 ring-2 ring-green-200 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            {{-- todo: icon --}}
                        </div>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-gray-700">Total Accepted</p>
                            <p class="text-gray-500 mt-2">Total Accepted Contributors</p>
                            <p class="text-2xl font-bold mt-2 text-green-500">{{ count($accepted_contributors) }}</p>
                        </div>
                    </div>
                </a>
                <!-- User Card -->
                <a href="{{ route('admin.validation') }}" class="bg-red-100 ring-2 ring-red-200 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            {{-- todo: icon --}}
                        </div>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-gray-700">Total Rejected</p>
                            <p class="text-gray-500 mt-2">Total Rejected Contributors</p>
                            <p class="text-2xl font-bold mt-2 text-red-500">{{ count($rejected_contributors) }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
