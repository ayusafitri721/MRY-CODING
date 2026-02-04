<!-- resources/views/classes/index.blade.php -->
@extends('layouts.app')

@section('title', 'Daftar Kelas - Mry Code')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Daftar Kelas</h1>
        <p class="text-gray-600 mt-2">Pilih kelas yang sesuai dengan minat dan level Anda</p>
    </div>

    <!-- Classes Grid -->
    @if($classes->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($classes as $class)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <!-- Header Card -->
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-6">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $class->title }}</h3>
                        <span class="inline-block bg-white text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full">
                            {{ ucfirst($class->level) }}
                        </span>
                    </div>

                    <!-- Body Card -->
                    <div class="p-6">
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            {{ Str::limit($class->description, 100) }}
                        </p>

                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span class="text-sm">{{ $class->instructor }}</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm">{{ $class->duration }} Jam</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-indigo-600">
                                Rp {{ number_format($class->price, 0, ',', '.') }}
                            </span>
                            <a href="{{ route('classes.show', $class) }}" 
                               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition duration-200">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $classes->links() }}
        </div>
    @else
        <div class="bg-white rounded-lg shadow p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum ada kelas tersedia</h3>
            <p class="text-gray-500">Silakan cek kembali nanti</p>
        </div>
    @endif
</div>
@endsection