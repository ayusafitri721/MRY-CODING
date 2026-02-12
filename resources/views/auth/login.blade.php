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
                    <div class="mt-4 text-center text-slate-400">atau</div>

                    <div class="mt-4 grid grid-cols-2 gap-3">
                        <a href="{{ route('social.redirect', 'google') }}" class="flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-white border border-slate-200 shadow-sm hover:shadow-md">
                            <img src="https://www.gstatic.com/devrel-devsite/prod/vd1b9f96a8a4a4d0b1a2c3d4e5f6f7/logo/googlelogo.png" alt="Google" class="h-5 w-5" />
                            <span class="text-sm text-slate-700 font-medium">Login with Google</span>
                        </a>

                        <a href="{{ route('social.redirect', 'facebook') }}" class="flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-blue-600 text-white shadow-sm hover:shadow-md">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22 12.07C22 6.48 17.52 2 11.93 2S2 6.48 2 12.07c0 5 3.66 9.13 8.44 9.93v-7.03H7.9v-2.9h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.45h-1.25c-1.23 0-1.61.77-1.61 1.56v1.87h2.74l-.44 2.9h-2.3v7.03C18.34 21.2 22 17.07 22 12.07z"/></svg>
                            <span class="text-sm font-medium">Login with Facebook</span>
                        </a>
                    </div>

                </form>
                <p class="text-center mt-6 text-slate-700">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 font-semibold underline">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</div>
@endsection