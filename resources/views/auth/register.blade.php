<!-- resources/views/auth/register.blade.php -->
@extends('layouts.app')

@section('noHeaderFooter')
@endsection

@push('styles')
<style>
    /* make background image cover entire page */
    body { background-image: url('{{ asset('images/login.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; }
    .bg-card-blue { background: #ffffff !important; }
    @media (max-width: 767px) { .hidden.md\:block { display: none !important; } }
</style>
@endpush

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-6 lg:p-10">
            <div class="bg-card-blue rounded-2xl shadow-2xl p-8 md:p-10 relative overflow-hidden text-slate-900">
                <h3 class="text-center text-slate-900 text-xl font-semibold mb-2">Buat akun baru</h3>
                <p class="text-center text-slate-700 mb-6 text-sm">Daftar untuk mengakses dashboard dan materi</p>

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="sr-only">Nama Lengkap</label>
                           <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                               placeholder="Nama Lengkap"
                               class="w-full px-4 py-3 rounded-full bg-slate-100 placeholder-slate-500 border-none focus:outline-none" />
                        @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="email" class="sr-only">Email</label>
                           <input id="email" name="email" type="email" value="{{ old('email') }}" required
                               placeholder="Email"
                               class="w-full px-4 py-3 rounded-full bg-slate-100 placeholder-slate-500 border-none focus:outline-none" />
                        @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                           <input id="password" name="password" type="password" required
                               placeholder="Password"
                               class="w-full px-4 py-3 rounded-full bg-slate-100 placeholder-slate-500 border-none focus:outline-none" />
                        @error('password')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="sr-only">Konfirmasi Password</label>
                           <input id="password_confirmation" name="password_confirmation" type="password" required
                               placeholder="Konfirmasi Password"
                               class="w-full px-4 py-3 rounded-full bg-slate-100 placeholder-slate-500 border-none focus:outline-none" />
                    </div>

                    <button type="submit" class="w-full py-3 mt-2 rounded-full bg-blue-600 text-white font-semibold shadow-md">Daftar Sekarang</button>
                </form>
                <p class="text-center mt-6 text-slate-700">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-600 font-semibold underline">Login di sini</a></p>
            </div>
        </div>
    </div>
</div>
@endsection