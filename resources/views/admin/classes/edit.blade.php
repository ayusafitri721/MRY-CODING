<!-- resources/views/admin/classes/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Kelas - Admin')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-8">
        <a href="{{ route('admin.classes.index') }}" 
           class="inline-flex items-center text-indigo-600 hover:text-indigo-700 mb-4">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali
        </a>
        <h1 class="text-3xl font-bold text-gray-800">Edit Kelas</h1>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow-lg p-8">
        <form method="POST" action="{{ route('admin.classes.update', $class) }}">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul Kelas *</label>
                <input type="text" 
                       name="title" 
                       id="title" 
                       value="{{ old('title', $class->title) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('title') border-red-500 @enderror"
                       required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi *</label>
                <textarea name="description" 
                          id="description" 
                          rows="5"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('description') border-red-500 @enderror"
                          required>{{ old('description', $class->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Instructor -->
            <div class="mb-4">
                <label for="instructor" class="block text-gray-700 font-medium mb-2">Nama Instruktur *</label>
                <input type="text" 
                       name="instructor" 
                       id="instructor" 
                       value="{{ old('instructor', $class->instructor) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('instructor') border-red-500 @enderror"
                       required>
                @error('instructor')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- Duration -->
                <div>
                    <label for="duration" class="block text-gray-700 font-medium mb-2">Durasi (Jam) *</label>
                    <input type="number" 
                           name="duration" 
                           id="duration" 
                           value="{{ old('duration', $class->duration) }}"
                           min="1"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('duration') border-red-500 @enderror"
                           required>
                    @error('duration')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price -->
                <div>
                    <label for="price" class="block text-gray-700 font-medium mb-2">Harga (Rp) *</label>
                    <input type="number" 
                           name="price" 
                           id="price" 
                           value="{{ old('price', $class->price) }}"
                           min="0"
                           step="0.01"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('price') border-red-500 @enderror"
                           required>
                    @error('price')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Level -->
                <div>
                    <label for="level" class="block text-gray-700 font-medium mb-2">Level *</label>
                    <select name="level" 
                            id="level"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('level') border-red-500 @enderror"
                            required>
                        <option value="">Pilih Level</option>
                        <option value="beginner" {{ old('level', $class->level) == 'beginner' ? 'selected' : '' }}>Beginner</option>
                        <option value="intermediate" {{ old('level', $class->level) == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                        <option value="advanced" {{ old('level', $class->level) == 'advanced' ? 'selected' : '' }}>Advanced</option>
                    </select>
                    @error('level')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4 mt-6">
                <a href="{{ route('admin.classes.index') }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold px-6 py-2 rounded-lg transition duration-200">
                    Batal
                </a>
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-2 rounded-lg transition duration-200">
                    Update Kelas
                </button>
            </div>
        </form>
    </div>
</div>
@endsection