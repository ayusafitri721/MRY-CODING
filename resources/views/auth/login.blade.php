<!-- resources/views/auth/login.blade.php -->
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
                <h3 class="text-center text-slate-900 text-xl font-semibold mb-2">Login to continue</h3>
                <p class="text-center text-slate-700 mb-6 text-sm">Masuk untuk mengakses dashboard dan materi</p>

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="email" class="sr-only">Email</label>
                           <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                               placeholder="Username/Email"
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

                    <div class="flex items-center justify-between text-sm text-slate-700">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember" class="h-4 w-4 text-slate-800 rounded" />
                            <span class="ml-2">Remember me</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="underline">Lupa password?</a>
                    </div>

                    <button type="submit" class="w-full py-3 mt-2 rounded-full bg-blue-600 text-white font-semibold shadow-md">Login</button>
                </form>
                <p class="text-center mt-6 text-slate-700">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 font-semibold underline">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</div>
@endsection