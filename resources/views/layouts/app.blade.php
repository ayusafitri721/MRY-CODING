<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mry Code')</title>
    <link rel="icon" type="image/png" href="https://www.iconsdb.com/icons/download/black/letter-a-64.png">
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navbar (hidden when view defines `noHeaderFooter` section) -->
    @unless(View::hasSection('noHeaderFooter'))
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ auth()->check() ? (auth()->user()->isAdmin() ? route('admin.classes.index') : route('classes.index')) : route('login') }}" 
                       class="text-2xl font-bold text-indigo-600">
                        Les<span class="text-gray-800">Coding</span>
                    </a>
                </div>
                
                <div class="flex items-center space-x-4">
                    @auth
                        <span class="text-gray-700">Halo, <strong>{{ auth()->user()->name }}</strong></span>
                        
                        @if(auth()->user()->isAdmin())
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                Admin
                            </span>
                        @endif
                        
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" 
                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-200">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" 
                           class="text-gray-700 hover:text-indigo-600 font-medium transition">
                            Login
                        </a>
                        <a href="{{ route('register') }}" 
                           class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition duration-200">
                            Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    @endunless

    <!-- Alert handled by SweetAlert2 via session flashes -->

    <!-- Main Content -->
    <main class="flex-grow py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    @unless(View::hasSection('noHeaderFooter'))
    <footer class="bg-gray-800 text-white py-6 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 MryCode. All rights reserved.</p>
        </div>
    </footer>
    @endunless

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const loginSuccess = @json(session('login_success'));
            const logoutSuccess = @json(session('logout_success'));
            const loginError = @json(session('login_error')) || @json(session('error')) || null;
            const status = @json(session('status')) || null;
            const success = @json(session('success')) || null;
            const errors = @json($errors->any() ? $errors->all() : null);

            // Login success -> show alert then redirect to dashboard
            if (loginSuccess) {
                Swal.fire({
                    icon: 'success',
                    title: 'Login berhasil!',
                    showConfirmButton: false,
                    timer: 2000,
                    willClose: () => {},
                }).then(() => { window.location.href = '{{ url('/dashboard') }}'; });
                return;
            }

            // Logout success -> show alert then redirect to login
            if (logoutSuccess) {
                Swal.fire({
                    icon: 'success',
                    title: 'Logout berhasil!',
                    showConfirmButton: false,
                    timer: 2000,
                }).then(() => { window.location.href = '{{ url('/login') }}'; });
                return;
            }

            // Login or other errors
            if (loginError) {
                Swal.fire({
                    icon: 'error',
                    title: 'Login gagal',
                    text: loginError
                });
                return;
            }

            // Validation errors (from $errors)
            if (errors && errors.length) {
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi kesalahan',
                    html: errors.join('<br>')
                });
                return;
            }

            // Generic status/success messages (no redirect)
            if (status || success) {
                Swal.fire({
                    icon: 'success',
                    title: status || success,
                    showConfirmButton: false,
                    timer: 2000
                });
                return;
            }
        });
    </script>
</body>
</html>