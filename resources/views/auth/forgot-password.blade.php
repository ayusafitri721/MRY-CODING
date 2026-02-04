@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Lupa Password</h2>

    <p class="text-sm text-gray-600 mb-6">Masukkan alamat email Anda. Kami akan mengirimkan link untuk mereset password.</p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus
                   class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        @if(!empty($mailers) && count($mailers) > 0)
        <div class="mb-4">
            <label class="block text-gray-700">Kirim dari</label>
            <select name="mailer" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
                @foreach($mailers as $m)
                    <option value="{{ $m }}" {{ config('mail.default') === $m ? 'selected' : '' }}>{{ $m }}</option>
                @endforeach
            </select>
            <p class="text-xs text-gray-500 mt-1">Pilih akun pengirim (mailer) jika Anda punya beberapa konfigurasi.</p>
        </div>
        @endif

        <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:underline">Kembali ke Login</a>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Kirim Link Reset</button>
        </div>
    </form>
</div>
@endsection
