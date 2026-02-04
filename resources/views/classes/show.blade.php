<!-- resources/views/classes/show.blade.php -->
@extends('layouts.app')

@section('title', $class->title . ' - Mry Code')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Back Button -->
    <a href="{{ route('classes.index') }}" 
       class="inline-flex items-center text-indigo-600 hover:text-indigo-700 mb-6">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Kembali ke Daftar Kelas
    </a>

    <!-- Class Detail Card -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-8">
            <span class="inline-block bg-white text-indigo-600 text-sm font-semibold px-3 py-1 rounded-full mb-4">
                {{ ucfirst($class->level) }}
            </span>
            <h1 class="text-3xl font-bold text-white mb-2">{{ $class->title }}</h1>
            <div class="flex items-center text-white text-sm">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span>Instruktur: {{ $class->instructor }}</span>
            </div>
        </div>

        <!-- Body -->
        <div class="p-8">
            <!-- Description -->
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Deskripsi Kelas</h2>
                <p class="text-gray-600 leading-relaxed whitespace-pre-line">{{ $class->description }}</p>
            </div>

            <!-- Info Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center mb-2">
                        <svg class="w-6 h-6 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="font-semibold text-gray-700">Durasi</h3>
                    </div>
                    <p class="text-gray-600">{{ $class->duration }} Jam</p>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="flex items-center mb-2">
                        <svg class="w-6 h-6 text-indigo-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="font-semibold text-gray-700">Level</h3>
                    </div>
                    <p class="text-gray-600">{{ ucfirst($class->level) }}</p>
                </div>
            </div>

            <!-- Price & CTA -->
            <div class="bg-indigo-50 border-2 border-indigo-200 rounded-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm mb-1">Harga Kelas</p>
                        <p class="text-3xl font-bold text-indigo-600">
                            Rp {{ number_format($class->price, 0, ',', '.') }}
                        </p>
                    </div>
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-8 py-3 rounded-lg transition duration-200">
                        Daftar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection