@section('noHeaderFooter')
@endsection

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MRY Code — Platform Les Coding</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root{--primary:#1E88FF;--primary-700:#166FE0;--primary-100:#E8F2FF}
        .btn-primary{background-color:var(--primary)}
        .btn-primary:hover{background-color:var(--primary-700)}
        .cara-kerja-carousel{ -ms-overflow-style: none; scrollbar-width: none; touch-action: pan-x; -webkit-overflow-scrolling: touch; overscroll-behavior: contain; }
        .cara-kerja-carousel::-webkit-scrollbar { display: none; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-slate-800">
    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-[#1E88FF] flex items-center justify-center text-white font-bold">M</div>
                <span class="text-xl font-semibold">MRY <span class="font-normal">Code</span></span>
            </a>

            <nav class="hidden md:flex items-center gap-6">
                <a href="#tentang" class="text-sm hover:text-[#1E88FF]">Tentang</a>
                <a href="#program" class="text-sm hover:text-[#1E88FF]">Program</a>
                <a href="#fitur" class="text-sm hover:text-[#1E88FF]">Fitur</a>
                <a href="#testimoni" class="text-sm hover:text-[#1E88FF]">Testimoni</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="px-3 py-2 rounded border border-[#1E88FF] text-[#1E88FF] text-sm">Login</a>
                <a href="{{ route('register') }}" class="px-4 py-2 rounded-md text-white btn-primary text-sm">Daftar</a>
            </div>
        </div>
    </header>

    <main class="">
        <!-- Hero -->
        <section class="max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl lg:text-5xl font-extrabold leading-tight">Belajar Coding Lebih Terarah di MRY Code</h1>
                <p class="mt-4 text-slate-600 max-w-xl">Kurikulum terstruktur, mentor berpengalaman, dan dashboard monitoring progres untuk membantu kamu berkembang dari dasar sampai siap kerja.</p>

                <div class="mt-8 flex gap-4">
                    <a href="{{ route('register') }}" class="px-6 py-3 rounded-lg text-white btn-primary shadow-md">Daftar Sekarang</a>
                    <a href="{{ route('login') }}" class="px-5 py-3 rounded-lg border border-slate-200 text-slate-700">Login</a>
                </div>

                <div class="mt-8 grid grid-cols-2 gap-4 max-w-md">
                    <div class="flex items-start gap-3">
                        <div class="w-9 h-9 rounded-md bg-[#E8F2FF] text-[#1E88FF] flex items-center justify-center">★</div>
                        <div>
                            <div class="text-sm font-semibold">Mentor Berpengalaman</div>
                            <div class="text-sm text-slate-500">Bimbingan langsung dan review proyek.</div>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-9 h-9 rounded-md bg-[#E8F2FF] text-[#1E88FF] flex items-center justify-center">✓</div>
                        <div>
                            <div class="text-sm font-semibold">Progress Tracking</div>
                            <div class="text-sm text-slate-500">Dashboard perkembangan real-time.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mockup -->
            <div class="flex items-center justify-center">
                <div class="w-full max-w-lg rounded-xl shadow-lg overflow-hidden border">
                    <div class="bg-white p-6">
                        <div class="h-3 bg-[#E8F2FF] rounded-full w-24 mb-4"></div>
                        <div class="h-48 bg-gradient-to-b from-white to-slate-50 rounded-lg flex items-center justify-center text-slate-400">Mockup Dashboard</div>
                        <div class="mt-4 grid grid-cols-3 gap-3">
                            <div class="h-12 bg-[#E8F2FF] rounded"></div>
                            <div class="h-12 bg-[#E8F2FF] rounded col-span-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang -->
        <section id="tentang" class="bg-white">
            <div class="max-w-6xl mx-auto px-6 py-16">
                <div class="text-center max-w-2xl mx-auto">
                    <h2 class="text-2xl font-bold">Tentang MRY Code</h2>
                    <p class="mt-3 text-slate-600">MRY Code membantu pelajar berkembang lewat kurikulum terstruktur, mentor interaktif, kuis, dan proyek yang menantang — semua dipantau lewat dashboard yang jelas.</p>
                </div>
            </div>
        </section>

        <!-- Fitur -->
        <section id="fitur" class="bg-slate-50">
            <div class="max-w-7xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Fitur Utama</h3>
                <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="text-[#1E88FF]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#1E88FF]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20l8-4V8a2 2 0 00-2-2h-6M4 6h.01M4 6v12l8-4 8 4" />
                            </svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Materi Terstruktur</h4>
                        <p class="text-sm text-slate-500 mt-2">Kurikulum per level untuk pembelajaran berkelanjutan.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="text-[#1E88FF]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#1E88FF]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11c1.657 0 3-1.567 3-3.5S17.657 4 16 4s-3 1.567-3 3.5S14.343 11 16 11zM8 11c1.657 0 3-1.567 3-3.5S9.657 4 8 4 5 5.567 5 7.5 6.343 11 8 11zM4 20v-1a4 4 0 014-4h8a4 4 0 014 4v1" />
                            </svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Mentor & Kelas</h4>
                        <p class="text-sm text-slate-500 mt-2">Sesi live, Q&A, dan review tugas.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="text-[#1E88FF]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#1E88FF]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3v18h18M18 13l-5-5-3 3-4-4" />
                            </svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Progress Tracking</h4>
                        <p class="text-sm text-slate-500 mt-2">Lihat perkembangan dan milestone belajar.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="text-[#1E88FF]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#1E88FF]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6M9 16h6M8 6h8l1 2H7l1-2zM7 20h10v-2H7v2z" />
                            </svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Quiz & Mini Project</h4>
                        <p class="text-sm text-slate-500 mt-2">Latihan terapan untuk memperkuat pemahaman.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="text-[#1E88FF]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-[#1E88FF]" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2l3 6 6 .5-4.5 3.5L19 20l-7-4-7 4 1.5-7L2 8.5 8 8l3-6z" />
                            </svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Sertifikat</h4>
                        <p class="text-sm text-slate-500 mt-2">Pengakuan setelah menyelesaikan program.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cara Kerja (carousel) -->
        <section id="cara-kerja" class="bg-white">
            <div class="max-w-6xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Cara Kerja</h3>

                <div class="relative mt-8">
                    <!-- Prev/Next buttons -->
                    <button id="ck-prev" aria-label="Sebelumnya" class="absolute left-0 top-1/2 -translate-y-1/2 p-2 rounded-full bg-white shadow-md hidden md:inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <div id="ck-carousel" class="cara-kerja-carousel overflow-x-auto scroll-smooth snap-x snap-mandatory flex gap-4 py-4 px-4 md:px-10" role="region" aria-label="Langkah cara kerja MRY Code">
                        <!-- Step 1 -->
                        <article class="snap-center flex-shrink-0 w-72 md:w-80 p-6 bg-white border rounded-xl shadow-sm">
                            <div class="w-12 h-12 rounded-lg bg-[#E8F2FF] text-[#1E88FF] flex items-center justify-center font-semibold">1</div>
                            <h4 class="mt-4 font-semibold">Daftar akun</h4>
                            <p class="mt-2 text-sm text-slate-500">Buat profil singkat dan verifikasi email untuk memulai.</p>
                        </article>

                        <!-- Step 2 -->
                        <article class="snap-center flex-shrink-0 w-72 md:w-80 p-6 bg-white border rounded-xl shadow-sm">
                            <div class="w-12 h-12 rounded-lg bg-[#E8F2FF] text-[#1E88FF] flex items-center justify-center font-semibold">2</div>
                            <h4 class="mt-4 font-semibold">Pilih kelas</h4>
                            <p class="mt-2 text-sm text-slate-500">Telusuri program dan pilih jalur yang sesuai dengan tujuanmu.</p>
                        </article>

                        <!-- Step 3 -->
                        <article class="snap-center flex-shrink-0 w-72 md:w-80 p-6 bg-white border rounded-xl shadow-sm">
                            <div class="w-12 h-12 rounded-lg bg-[#E8F2FF] text-[#1E88FF] flex items-center justify-center font-semibold">3</div>
                            <h4 class="mt-4 font-semibold">Belajar & latihan</h4>
                            <p class="mt-2 text-sm text-slate-500">Ikuti materi, kuis, dan mini project untuk praktek nyata.</p>
                        </article>

                        <!-- Step 4 -->
                        <article class="snap-center flex-shrink-0 w-72 md:w-80 p-6 bg-white border rounded-xl shadow-sm">
                            <div class="w-12 h-12 rounded-lg bg-[#E8F2FF] text-[#1E88FF] flex items-center justify-center font-semibold">4</div>
                            <h4 class="mt-4 font-semibold">Lihat progress</h4>
                            <p class="mt-2 text-sm text-slate-500">Pantau perkembanganmu melalui dashboard dan milestone.</p>
                        </article>

                        <!-- Step 5 -->
                        <article class="snap-center flex-shrink-0 w-72 md:w-80 p-6 bg-white border rounded-xl shadow-sm">
                            <div class="w-12 h-12 rounded-lg bg-[#E8F2FF] text-[#1E88FF] flex items-center justify-center font-semibold">5</div>
                            <h4 class="mt-4 font-semibold">Selesai & sertifikat</h4>
                            <p class="mt-2 text-sm text-slate-500">Selesaikan jalur dan dapatkan sertifikat sebagai bukti skill.</p>
                        </article>
                    </div>

                    <button id="ck-next" aria-label="Selanjutnya" class="absolute right-0 top-1/2 -translate-y-1/2 p-2 rounded-full bg-white shadow-md hidden md:inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Dots -->
                    <div id="ck-dots" class="mt-4 flex items-center justify-center gap-2"></div>
                </div>
            </div>
        </section>

        <!-- Program -->
        <section id="program" class="bg-slate-50">
            <div class="max-w-7xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Program / Kelas</h3>
                <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h4 class="font-semibold">Web Development</h4>
                        <p class="text-sm text-slate-500 mt-2">Full-stack roadmap praktis.</p>
                        <a href="#" class="mt-4 inline-block text-sm text-[#1E88FF]">Lihat Kelas →</a>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h4 class="font-semibold">Frontend</h4>
                        <p class="text-sm text-slate-500 mt-2">UI, React/Vue, interaksi modern.</p>
                        <a href="#" class="mt-4 inline-block text-sm text-[#1E88FF]">Lihat Kelas →</a>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h4 class="font-semibold">Backend</h4>
                        <p class="text-sm text-slate-500 mt-2">API, database, best practice.</p>
                        <a href="#" class="mt-4 inline-block text-sm text-[#1E88FF]">Lihat Kelas →</a>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <h4 class="font-semibold">UI/UX</h4>
                        <p class="text-sm text-slate-500 mt-2">Desain antarmuka & prototyping.</p>
                        <a href="#" class="mt-4 inline-block text-sm text-[#1E88FF]">Lihat Kelas →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimoni -->
        <section id="testimoni" class="bg-white">
            <div class="max-w-6xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Testimoni</h3>
                <div class="mt-8 grid md:grid-cols-2 gap-6">
                    <div class="bg-slate-50 p-6 rounded-lg">
                        <div class="font-semibold">Aulia — Frontend</div>
                        <div class="text-sm text-slate-600 mt-2">"Kurikulumnya sistematis — saya dapat pekerjaan pertama saya!"</div>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-lg">
                        <div class="font-semibold">Rizky — Backend</div>
                        <div class="text-sm text-slate-600 mt-2">"Mentor sangat membantu, progress saya jelas terlihat."</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Penutup -->
        <section class="bg-[#1E88FF] text-white">
            <div class="max-w-7xl mx-auto px-6 py-16 text-center">
                <h3 class="text-3xl font-bold">Siap mulai perjalanan codingmu?</h3>
                <p class="mt-3 text-slate-100">Daftar gratis dan mulai pelajari jalurmu hari ini.</p>
                <div class="mt-6">
                    <a href="{{ route('register') }}" class="px-6 py-3 rounded-lg bg-white text-[#1E88FF] font-semibold">Mulai Belajar Sekarang</a>
                </div>
            </div>
        </section>

        <!-- Footer custom (modern) -->
        <footer class="bg-gradient-to-r from-slate-900 via-slate-800 to-[#0b3d91] text-slate-100">
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Brand -->
                    <div class="md:col-span-1">
                        <a href="/" class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-white font-bold">M</div>
                            <span class="text-lg font-semibold">MRY Code</span>
                        </a>
                        <p class="mt-3 text-sm text-slate-300 max-w-sm">Platform les coding terstruktur dengan mentor berpengalaman, progress tracking, dan proyek nyata untuk membantumu siap kerja.</p>
                        <div class="mt-4 flex items-center gap-3">
                            <a href="#" aria-label="Instagram" class="text-slate-200 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 6.5A4.5 4.5 0 1016.5 13 4.5 4.5 0 0012 8.5zm6.5-.75a1.25 1.25 0 11-1.25-1.25A1.25 1.25 0 0118.5 7.75z"/></svg>
                            </a>
                            <a href="#" aria-label="Twitter" class="text-slate-200 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 7.5v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                            </a>
                            <a href="#" aria-label="LinkedIn" class="text-slate-200 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5A2.5 2.5 0 004 6v12a2.5 2.5 0 002.48 2.5H19.5A2.5 2.5 0 0022 18V6a2.5 2.5 0 00-2.5-2.5H4.98zM8 10.5V17H5.5v-6.5H8zm-1.25-3A1.25 1.25 0 116.5 6 1.25 1.25 0 016.75 7.5zM12 10.5v1.1a3.5 3.5 0 013.25-1.8c3.5 0 4 2.3 4 5.2V17H16v-4.2c0-1 0-2.3-1.4-2.3s-1.6 1.1-1.6 2.2V17H10V10.5h2z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick links -->
                    <div>
                        <h4 class="font-semibold">Tautan Cepat</h4>
                        <ul class="mt-3 space-y-2 text-sm text-slate-300">
                            <li><a href="#tentang" class="hover:text-white">Tentang</a></li>
                            <li><a href="#program" class="hover:text-white">Program</a></li>
                            <li><a href="#fitur" class="hover:text-white">Fitur</a></li>
                            <li><a href="#testimoni" class="hover:text-white">Testimoni</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h4 class="font-semibold">Kontak</h4>
                        <div class="mt-3 text-sm text-slate-300">
                            <div>Email: <a href="mailto:hello@mrycode.id" class="hover:text-white">hello@mrycode.id</a></div>
                            <div class="mt-2">Alamat: Jakarta, Indonesia</div>
                            <div class="mt-2">Jam: Senin–Jumat, 09:00–17:00</div>
                        </div>
                    </div>

                    <!-- Newsletter / CTA -->
                    <div class="md:col-span-1">
                        <h4 class="font-semibold">Dapatkan update</h4>
                        <p class="mt-2 text-sm text-slate-300">Langganan newsletter untuk tips belajar dan info program.</p>
                        <form id="footer-newsletter-form" class="mt-4 flex gap-2" method="POST" action="{{ route('subscribe') }}">
                            @csrf
                            <label for="footer-email" class="sr-only">Email</label>
                            <input id="footer-email" name="email" type="email" placeholder="Email kamu" required class="w-full px-3 py-2 rounded-md bg-white/10 placeholder:text-slate-300 text-white focus:outline-none focus:ring-2 focus:ring-[#1E88FF]" />
                            <button type="submit" class="px-4 py-2 rounded-md bg-[#1E88FF] hover:bg-[#166FE0]">Subscribe</button>
                        </form>
                        <div class="mt-4 text-xs text-slate-400">Kami tidak akan membagikan emailmu. Kamu bisa berhenti berlangganan kapan saja.</div>
                    </div>
                </div>

                <div class="border-t border-white/10 mt-8 pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-slate-300">
                    <div>© 2026 MRY Code. All rights reserved.</div>
                    <div class="flex items-center gap-4">
                        <a href="#" class="hover:text-white">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-white">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Cara Kerja carousel - basic navigation, dots, keyboard support
        (function(){
            const carousel = document.getElementById('ck-carousel');
            if (!carousel) return;
            const prev = document.getElementById('ck-prev');
            const next = document.getElementById('ck-next');
            const dotsWrap = document.getElementById('ck-dots');
            const items = Array.from(carousel.querySelectorAll('article'));

            // create dots
            items.forEach((it, i) => {
                const btn = document.createElement('button');
                btn.className = 'w-2 h-2 rounded-full bg-slate-300';
                btn.setAttribute('aria-label', 'Step ' + (i+1));
                btn.addEventListener('click', () => scrollToIndex(i));
                dotsWrap.appendChild(btn);
            });

            const dots = Array.from(dotsWrap.children);

            function scrollToIndex(i){
                const el = items[i];
                if (!el) return;
                el.scrollIntoView({behavior:'smooth', inline:'center'});
            }

            function activeIndex(){
                const center = carousel.scrollLeft + (carousel.clientWidth / 2);
                let idx = 0;
                let minDist = Infinity;
                items.forEach((it, i) => {
                    const rect = it.getBoundingClientRect();
                    const containerRect = carousel.getBoundingClientRect();
                    const itCenter = (it.offsetLeft - carousel.scrollLeft) + it.offsetWidth/2;
                    const dist = Math.abs((carousel.clientWidth/2) - itCenter);
                    if (dist < minDist){ minDist = dist; idx = i; }
                });
                return idx;
            }

            function updateDots(){
                const idx = activeIndex();
                dots.forEach((d,i)=> d.className = i===idx ? 'w-3 h-3 rounded-full bg-[#1E88FF]' : 'w-2 h-2 rounded-full bg-slate-300');
            }

            // prev/next handlers
            prev && prev.addEventListener('click', ()=>{
                const idx = Math.max(0, activeIndex()-1);
                scrollToIndex(idx);
            });
            next && next.addEventListener('click', ()=>{
                const idx = Math.min(items.length-1, activeIndex()+1);
                scrollToIndex(idx);
            });

            // update on scroll (throttled)
            let tid;
            carousel.addEventListener('scroll', ()=>{
                clearTimeout(tid);
                tid = setTimeout(updateDots, 80);
            });

            // keyboard support
            document.addEventListener('keydown', (e)=>{
                if (document.activeElement && (document.activeElement.tagName==='INPUT' || document.activeElement.tagName==='TEXTAREA')) return;
                if (e.key === 'ArrowRight') { next && next.click(); }
                if (e.key === 'ArrowLeft') { prev && prev.click(); }
            });

            // initialize
            updateDots();
        })();
    </script>
    <script>
        // Newsletter subscribe using SweetAlert2 (POST to server)
        (function(){
            const form = document.getElementById('footer-newsletter-form');
            const emailInput = document.getElementById('footer-email');
            if (!form || !emailInput) return;

            form.addEventListener('submit', async function(e){
                e.preventDefault();
                const email = emailInput.value && emailInput.value.trim();
                if (!email){
                    Swal.fire({ icon: 'error', title: 'Email kosong', text: 'Silakan masukkan alamat email yang valid.', confirmButtonColor: '#1E88FF' });
                    return;
                }

                const tokenInput = form.querySelector('input[name="_token"]');
                const token = tokenInput ? tokenInput.value : '';

                try {
                    const res = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': token
                        },
                        body: JSON.stringify({ email })
                    });

                    if (res.ok) {
                        const data = await res.json();
                        Swal.fire({ icon: 'success', title: 'Terima kasih!', html: `<div>Email <strong>${data.email}</strong> telah terdaftar. Kami akan mengirimkan update ke kotak masuk Anda.</div>`, confirmButtonColor: '#1E88FF' });
                        form.reset();
                    } else {
                        const err = await res.json().catch(()=>({message:'Terjadi kesalahan'}));
                        Swal.fire({ icon: 'error', title: 'Gagal', text: err.message || 'Gagal mendaftar', confirmButtonColor: '#1E88FF' });
                    }
                } catch (err) {
                    Swal.fire({ icon: 'error', title: 'Gagal', text: 'Tidak dapat menghubungi server.', confirmButtonColor: '#1E88FF' });
                }
            });
        })();
    </script>
</body>
</html>
