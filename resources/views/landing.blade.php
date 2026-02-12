@section('noHeaderFooter')
@endsection

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MRY Code — Platform Les Coding</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root{
            --primary:#2563EB; /* Primary Blue */
            --primary-700:#1E40AF; /* Hover */
            --primary-100:#EFF6FF; /* Light bg */
            --muted:#6B7280;
        }
        body { font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
        .btn-primary{background-color:var(--primary); color:white}
        .btn-primary:hover{background-color:var(--primary-700)}
        .btn-outline-primary{border:1px solid var(--primary); color:var(--primary); background:white}
        .card-hover{ transition: transform .18s ease, box-shadow .18s ease; }
        .card-hover:hover{ transform: translateY(-6px); box-shadow: 0 10px 30px rgba(37,99,235,0.12); }
        .step-connector{ height:2px; background:linear-gradient(90deg,var(--primary) 0%, rgba(37,99,235,0.15) 100%); }
        .avatar-circle{ width:48px; height:48px; border-radius:9999px; display:inline-flex; align-items:center; justify-content:center; font-weight:700; color:white; }
        .trusted-logo{ opacity:0.8; filter:grayscale(20%); }
        .timeline-step-active{ color:var(--primary); border-color:var(--primary); }
        .timeline-dot{ width:12px; height:12px; border-radius:9999px; background:var(--primary); display:inline-block; }
        /* Motion & UI enhancements */
        @keyframes floatY { 0% { transform: translateY(0px); } 50% { transform: translateY(-8px); } 100% { transform: translateY(0px); } }
        .animate-float { animation: floatY 6s ease-in-out infinite; will-change: transform; }

        .reveal { opacity: 0; transform: translateY(10px); transition: opacity .6s cubic-bezier(.2,.9,.2,1), transform .6s cubic-bezier(.2,.9,.2,1); }
        .reveal.revealed { opacity: 1; transform: translateY(0); }

        .btn-primary, .btn-outline-primary { transition: transform .22s cubic-bezier(.2,.9,.2,1), box-shadow .22s linear; }
        .btn-primary:hover, .btn-outline-primary:hover { transform: scale(1.03); box-shadow: 0 8px 30px rgba(37,99,235,0.18); }

        .card-hover { will-change: transform, box-shadow; }
        .card-hover:hover { transform: translateY(-8px) scale(1.01); box-shadow: 0 18px 40px rgba(15,23,42,0.08); border: 1px solid rgba(37,99,235,0.06); }

        /* glassmorphism */
        .glass { background: rgba(255,255,255,0.6); backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px); border: 1px solid rgba(255,255,255,0.4); }

        /* subtle gradient bg orbs */
        .bg-orb { position:absolute; border-radius:9999px; filter: blur(36px); opacity: .18; pointer-events:none; }

        /* progress fill animation */
        .progress-fill { width:0%; height:100%; background: linear-gradient(90deg,var(--primary), #3B82F6); transition: width 1.2s cubic-bezier(.2,.9,.2,1); }

        /* testimonial star shimmer */
        @keyframes shimmer { 0% { background-position: -200px 0 } 100% { background-position: 200px 0 } }
        .star-shimmer { background: linear-gradient(90deg, rgba(255,255,255,0.05), rgba(255,255,255,0.18), rgba(255,255,255,0.05)); background-size: 400px 100%; display:inline-block; -webkit-background-clip: text; background-clip: text; color: transparent; animation: shimmer 1.6s linear infinite; }

        /* small utilities */
        .underline-anim { position:relative; }
        .underline-anim::after { content:''; position:absolute; left:0; bottom:-6px; height:3px; width:0; background:linear-gradient(90deg,var(--primary),var(--primary-700)); transition: width .28s cubic-bezier(.2,.9,.2,1); border-radius:3px; }
        .underline-anim:hover::after { width:56%; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-slate-800">
    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-[color:var(--primary)] flex items-center justify-center text-white font-bold">M</div>
                <span class="text-lg font-semibold">MRY <span class="font-normal">Code</span></span>
            </a>

            <nav class="hidden md:flex items-center gap-6 text-sm">
                <a href="#tentang" class="hover:text-[color:var(--primary)]">Tentang</a>
                <a href="#kenapa" class="hover:text-[color:var(--primary)]">Kenapa Kami</a>
                <a href="#program" class="hover:text-[color:var(--primary)]">Program</a>
                <a href="#fitur" class="hover:text-[color:var(--primary)]">Fitur</a>
                <a href="#testimoni" class="hover:text-[color:var(--primary)]">Testimoni</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="px-3 py-2 rounded-md btn-outline-primary text-sm">Login</a>
                <a href="{{ route('register') }}" class="px-4 py-2 rounded-md btn-primary text-sm">Daftar</a>
            </div>
        </div>
    </header>

    <main class="">
        <!-- Hero -->
        <section class="max-w-7xl mx-auto px-6 py-20">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-4xl lg:text-5xl font-extrabold leading-tight">Belajar Coding dari Nol sampai Siap Kerja dengan Sistem Terstruktur</h1>
                    <p class="mt-4 text-slate-600 max-w-xl">Mentor industri, praktik proyek nyata, dan progress tracking real-time untuk membuatmu siap kerja — tidak sekadar teori.</p>

                    <div class="mt-8 flex items-center gap-4">
                        <a href="{{ route('register') }}" class="px-6 py-3 rounded-lg text-white btn-primary shadow-md">Daftar Sekarang</a>
                        <a href="{{ route('login') }}" class="px-5 py-3 rounded-lg border border-slate-200 text-slate-700">Login</a>
                    </div>

                    <div class="mt-3 text-sm text-[color:var(--muted)]">100+ siswa aktif • Mentor industri • Progress real-time</div>

                    <!-- Social proof mini -->
                    <div class="mt-8 flex items-center gap-6">
                        <div class="flex items-center gap-4">
                                <img src="/images/logo-partner1.svg" alt="partner" class="h-6 trusted-logo" onerror="this.style.visibility='hidden'" />
                                <img src="/images/logo-partner2.svg" alt="partner" class="h-6 trusted-logo" onerror="this.style.visibility='hidden'" />
                                <img src="/images/logo-partner3.svg" alt="partner" class="h-6 trusted-logo" onerror="this.style.visibility='hidden'" />
                        </div>

                            <div class="ml-6 border-l pl-6 text-sm text-[color:var(--muted)]">
                                <div class="font-semibold"><span class="countup" data-target="500">0</span>+ latihan diselesaikan</div>
                                <div class="mt-1"><span class="countup" data-target="90">0</span>% siswa lulus modul pertama</div>
                            </div>
                    </div>
                </div>

                <!-- Dashboard mockup (visual) -->
                <div class="relative flex items-center justify-center">
                    <!-- floating orbs -->
                    <div class="bg-orb" style="width:220px;height:220px;right:12%;top:-20px;background:linear-gradient(135deg,var(--primary),#3B82F6);opacity:.14;transform:translateZ(0);"></div>
                    <div class="bg-orb" style="width:140px;height:140px;left:4%;bottom:20%;background:linear-gradient(135deg,#60A5FA,var(--primary));opacity:.12;transform:translateZ(0);"></div>
                    <div class="w-full max-w-lg rounded-xl shadow-lg overflow-hidden border bg-white animate-float glass">
                        <div class="p-6 bg-[color:var(--primary-100)]">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-sm text-[color:var(--muted)]">Kelas Aktif</div>
                                    <div class="font-semibold text-lg">Web Development - Beginner</div>
                                </div>
                                <div class="text-sm text-[color:var(--muted)]">Progress</div>
                            </div>

                            <div class="mt-4">
                                <div class="w-full bg-white rounded-full h-3 overflow-hidden">
                                    <div class="progress-fill" data-target="62"></div>
                                </div>
                                <div class="mt-2 text-sm text-[color:var(--muted)]"><span class="progress-label">0%</span> selesai • 4/8 modul</div>
                            </div>

                            <div class="mt-6 grid grid-cols-3 gap-3">
                                <div class="bg-white p-3 rounded-lg shadow-sm text-center">
                                    <div class="text-xs text-[color:var(--muted)]">Modul</div>
                                    <div class="font-semibold">8</div>
                                </div>
                                <div class="bg-white p-3 rounded-lg shadow-sm text-center">
                                    <div class="text-xs text-[color:var(--muted)]">Siswa</div>
                                    <div class="font-semibold">120</div>
                                </div>
                                <div class="bg-white p-3 rounded-lg shadow-sm text-center">
                                    <div class="text-xs text-[color:var(--muted)]">Selesai</div>
                                    <div class="font-semibold">500+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang (value-focused) -->
        <section id="tentang" class="bg-white">
            <div class="max-w-6xl mx-auto px-6 py-16">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-2xl font-bold">Hasil yang kami dorong</h2>
                    <p class="mt-3 text-slate-600">Di MRY Code fokus kami adalah outcome: project nyata, feedback mentor, dan pelacakan progress sehingga kamu bukan hanya belajar — tapi menunjukkan kemampuan yang bisa dipakai kerja.</p>
                </div>
            </div>
        </section>

        <!-- Kenapa Kami -->
        <section id="kenapa" class="bg-[color:var(--primary-100)]">
            <div class="max-w-7xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Kenapa Memilih MRY Code?</h3>
                <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-xl card-hover">
                        <!-- Icon: code/project -->
                        <div class="w-10 h-10 rounded-md bg-[color:var(--primary)] text-white flex items-center justify-center"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20l9-5-9-5-9 5 9 5z" /></svg>
                        </div>
                        <h4 class="mt-4 font-semibold">Fokus Praktik & Project</h4>
                        <p class="mt-2 text-sm text-[color:var(--muted)]">Latihan langsung lewat mini-project yang mirip tugas kerja nyata.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl card-hover">
                        <div class="w-10 h-10 rounded-md bg-[color:var(--primary)] text-white flex items-center justify-center"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14v6"/></svg>
                        </div>
                        <h4 class="mt-4 font-semibold">Mentor & Review Personal</h4>
                        <p class="mt-2 text-sm text-[color:var(--muted)]">Mentor industri memberikan feedback langsung pada tugasmu.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl card-hover">
                        <div class="w-10 h-10 rounded-md bg-[color:var(--primary)] text-white flex items-center justify-center"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12h18M12 3v18"/></svg>
                        </div>
                        <h4 class="mt-4 font-semibold">Progress Tracking Real-Time</h4>
                        <p class="mt-2 text-sm text-[color:var(--muted)]">Pantau tugas, modul, dan perkembangan skill secara terukur.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl card-hover">
                        <div class="w-10 h-10 rounded-md bg-[color:var(--primary)] text-white flex items-center justify-center"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zM6 20v-2a4 4 0 014-4h4a4 4 0 014 4v2"/></svg>
                        </div>
                        <h4 class="mt-4 font-semibold">Kurikulum Bertahap</h4>
                        <p class="mt-2 text-sm text-[color:var(--muted)]">Roadmap jelas dari beginner hingga advanced tanpa loncat-loncat.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fitur (benefit-driven) -->
        <section id="fitur" class="bg-white">
            <div class="max-w-7xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Fitur Utama</h3>
                <p class="text-center mt-2 text-[color:var(--muted)]">Semua fitur dirancang untuk membuat proses belajar efektif dan langsung terlihat hasilnya.</p>

                <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-[color:var(--primary-100)] p-6 rounded-xl card-hover">
                        <div class="text-[color:var(--primary)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2V11H3v8a2 2 0 002 2z"/></svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Materi Terstruktur</h4>
                        <p class="text-sm text-[color:var(--muted)] mt-2 reveal">Belajar step-by-step tanpa bingung mulai dari mana.</p>
                    </div>

                    <div class="bg-[color:var(--primary-100)] p-6 rounded-xl card-hover">
                        <div class="text-[color:var(--primary)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11c1.657 0 3-1.567 3-3.5S17.657 4 16 4s-3 1.567-3 3.5S14.343 11 16 11zM8 11c1.657 0 3-1.567 3-3.5S9.657 4 8 4 5 5.567 5 7.5 6.343 11 8 11zM4 20v-1a4 4 0 014-4h8a4 4 0 014 4v1"/></svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Mentor & Kelas</h4>
                        <p class="text-sm text-[color:var(--muted)] mt-2">Dapatkan bimbingan langsung dan feedback personal pada tugasmu.</p>
                    </div>

                    <div class="bg-[color:var(--primary-100)] p-6 rounded-xl card-hover">
                        <div class="text-[color:var(--primary)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3v18h18M18 13l-5-5-3 3-4-4"/></svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Progress Tracking</h4>
                        <p class="text-sm text-[color:var(--muted)] mt-2">Pantau perkembangan skill secara real-time.</p>
                    </div>

                    <div class="bg-[color:var(--primary-100)] p-6 rounded-xl card-hover">
                        <div class="text-[color:var(--primary)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6M9 16h6M8 6h8l1 2H7l1-2zM7 20h10v-2H7v2z"/></svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Quiz & Mini Project</h4>
                        <p class="text-sm text-[color:var(--muted)] mt-2">Latihan langsung untuk memperkuat pemahaman.</p>
                    </div>

                    <div class="bg-[color:var(--primary-100)] p-6 rounded-xl card-hover">
                        <div class="text-[color:var(--primary)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2l3 6 6 .5-4.5 3.5L19 20l-7-4-7 4 1.5-7L2 8.5 8 8l3-6z"/></svg>
                        </div>
                        <h4 class="mt-3 font-semibold">Sertifikat</h4>
                        <p class="text-sm text-[color:var(--muted)] mt-2">Validasi skill setelah menyelesaikan program.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cara Kerja (timeline) -->
        <section id="cara-kerja" class="bg-[color:var(--primary-100)]">
            <div class="max-w-6xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Bagaimana Cara Kerjanya</h3>
                <div class="mt-10 flex flex-col items-center">
                    <div class="w-full max-w-4xl">
                        <div class="flex items-center justify-between gap-4">
                            <div class="text-center flex-1">
                                <div class="mx-auto w-12 h-12 rounded-full bg-white flex items-center justify-center font-semibold text-[color:var(--primary)]">1</div>
                                <div class="mt-3 font-semibold">Daftar Akun</div>
                                <div class="text-sm text-[color:var(--muted)] mt-1">Buat profil singkat dan mulai kursus.</div>
                            </div>

                            <div class="flex-1 text-center">
                                <div class="mx-auto w-12 h-12 rounded-full bg-white flex items-center justify-center font-semibold text-[color:var(--primary)]">2</div>
                                <div class="mt-3 font-semibold">Pilih Program</div>
                                <div class="text-sm text-[color:var(--muted)] mt-1">Pilih jalur sesuai tujuan kariermu.</div>
                            </div>

                            <div class="flex-1 text-center">
                                <div class="mx-auto w-12 h-12 rounded-full bg-white flex items-center justify-center font-semibold text-[color:var(--primary)]">3</div>
                                <div class="mt-3 font-semibold">Belajar & Praktik</div>
                                <div class="text-sm text-[color:var(--muted)] mt-1">Ikuti materi, kuis, dan proyek.</div>
                            </div>

                            <div class="flex-1 text-center">
                                <div class="mx-auto w-12 h-12 rounded-full bg-white flex items-center justify-center font-semibold text-[color:var(--primary)]">4</div>
                                <div class="mt-3 font-semibold">Kerjakan Project</div>
                                <div class="text-sm text-[color:var(--muted)] mt-1">Terapkan skill ke project nyata.</div>
                            </div>

                            <div class="flex-1 text-center">
                                <div class="mx-auto w-12 h-12 rounded-full bg-white flex items-center justify-center font-semibold text-[color:var(--primary)]">5</div>
                                <div class="mt-3 font-semibold">Dapatkan Sertifikat</div>
                                <div class="text-sm text-[color:var(--muted)] mt-1">Bukti kemampuan untuk portfolio atau kerja.</div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-between text-[color:var(--muted)]">
                            <div class="flex-1 h-1 bg-white/50"></div>
                            <div class="flex-1 h-1 bg-white/50"></div>
                            <div class="flex-1 h-1 bg-white/50"></div>
                            <div class="flex-1 h-1 bg-white/50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program -->
        <section id="program" class="bg-white">
            <div class="max-w-7xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Program / Kelas</h3>
                <p class="text-center mt-2 text-[color:var(--muted)]">Pilih jalur yang sesuai, tiap program dibuat untuk skill yang langsung dapat dipakai.</p>

                <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                        <div class="flex items-center justify-between">
                            <div class="text-sm font-semibold">Web Development</div>
                            <div class="text-xs px-2 py-1 rounded bg-[color:var(--primary-100)] text-[color:var(--primary)]">Beginner</div>
                        </div>
                        <p class="text-sm text-[color:var(--muted)] mt-3">Roadmap fullstack praktis</p>
                        <div class="mt-4 text-sm text-[color:var(--muted)]">8 Modul • 12 Minggu</div>
                        <a href="#" class="mt-4 inline-block text-sm text-[color:var(--primary)] font-semibold">Lihat Silabus →</a>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                        <div class="flex items-center justify-between">
                            <div class="text-sm font-semibold">Frontend</div>
                            <div class="text-xs px-2 py-1 rounded bg-[color:var(--primary-100)] text-[color:var(--primary)]">Intermediate</div>
                        </div>
                        <p class="text-sm text-[color:var(--muted)] mt-3">UI, React/Vue, interaksi modern.</p>
                        <div class="mt-4 text-sm text-[color:var(--muted)]">6 Modul • 8 Minggu</div>
                        <a href="#" class="mt-4 inline-block text-sm text-[color:var(--primary)] font-semibold">Lihat Silabus →</a>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                        <div class="flex items-center justify-between">
                            <div class="text-sm font-semibold">Backend</div>
                            <div class="text-xs px-2 py-1 rounded bg-[color:var(--primary-100)] text-[color:var(--primary)]">Advanced</div>
                        </div>
                        <p class="text-sm text-[color:var(--muted)] mt-3">API, database, best practice.</p>
                        <div class="mt-4 text-sm text-[color:var(--muted)]">10 Modul • 16 Minggu</div>
                        <a href="#" class="mt-4 inline-block text-sm text-[color:var(--primary)] font-semibold">Lihat Silabus →</a>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                        <div class="flex items-center justify-between">
                            <div class="text-sm font-semibold">UI/UX</div>
                            <div class="text-xs px-2 py-1 rounded bg-[color:var(--primary-100)] text-[color:var(--primary)]">Beginner</div>
                        </div>
                        <p class="text-sm text-[color:var(--muted)] mt-3">Desain antarmuka & prototyping.</p>
                        <div class="mt-4 text-sm text-[color:var(--muted)]">5 Modul • 6 Minggu</div>
                        <a href="#" class="mt-4 inline-block text-sm text-[color:var(--primary)] font-semibold">Lihat Silabus →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimoni -->
        <section id="testimoni" class="bg-[color:var(--primary-100)]">
            <div class="max-w-6xl mx-auto px-6 py-16">
                <h3 class="text-2xl font-bold text-center">Testimoni</h3>
                <div class="mt-8 grid md:grid-cols-3 gap-6" id="testimonials-wrap">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex items-center gap-4">
                            <div class="avatar-circle" style="background:#2563EB">A</div>
                            <div>
                                <div class="font-semibold">Aulia — Frontend Developer</div>
                                <div class="text-sm text-[color:var(--muted)]">"Saya dapat kerja freelance setelah 3 bulan belajar di MRY Code."</div>
                            </div>
                        </div>
                        <div class="mt-4 text-yellow-400"><span class="star-shimmer">★★★★★</span></div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex items-center gap-4">
                            <div class="avatar-circle" style="background:#1E40AF">R</div>
                            <div>
                                <div class="font-semibold">Rizky — Backend</div>
                                <div class="text-sm text-[color:var(--muted)]">"Mentor memberi feedback yang konkret sehingga saya paham perbaikan."</div>
                            </div>
                        </div>
                        <div class="mt-4 text-yellow-400"><span class="star-shimmer">★★★★★</span></div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex items-center gap-4">
                            <div class="avatar-circle" style="background:#3B82F6">S</div>
                            <div>
                                <div class="font-semibold">Sari — UI/UX</div>
                                <div class="text-sm text-[color:var(--muted)]">"Proyek nyata membantu saya membangun portofolio yang menarik."</div>
                            </div>
                        </div>
                        <div class="mt-4 text-yellow-400"><span class="star-shimmer">★★★★★</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Konversi -->
        <section class="bg-[color:var(--primary)] text-white">
            <div class="max-w-7xl mx-auto px-6 py-20 text-center">
                <h3 class="text-3xl font-bold">Siap Upgrade Skill Codingmu dan Bangun Karier di Dunia Teknologi?</h3>
                <p class="mt-3 text-slate-100 max-w-2xl mx-auto">Mulai dari nol, dibimbing mentor, dan pantau progressmu setiap hari. Gratis daftar • Tidak perlu pengalaman.</p>
                <div class="mt-8 flex items-center justify-center gap-4">
                    <a href="{{ route('register') }}" class="px-8 py-4 rounded-lg btn-primary text-lg">Mulai Belajar Sekarang</a>
                    <a href="{{ route('login') }}" class="px-6 py-3 rounded-lg btn-outline-primary">Login</a>
                </div>
                <div class="mt-4 text-sm text-[color:var(--primary-100)]">Gratis daftar • Tidak perlu pengalaman</div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-white border-t">
            <div class="max-w-7xl mx-auto px-6 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <a href="/" class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-[color:var(--primary)] flex items-center justify-center text-white font-bold">M</div>
                            <span class="text-lg font-semibold">MRY Code</span>
                        </a>
                        <p class="mt-3 text-sm text-[color:var(--muted)] max-w-sm">Platform pembelajaran coding berbasis praktik, mentor industri, dan progress tracking untuk membantu kamu siap kerja.</p>
                        <div class="mt-4 flex items-center gap-3">
                            <a href="#" aria-label="Instagram" class="text-[color:var(--muted)] hover:text-[color:var(--primary)]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 6.5A4.5 4.5 0 1016.5 13 4.5 4.5 0 0012 8.5zm6.5-.75a1.25 1.25 0 11-1.25-1.25A1.25 1.25 0 0118.5 7.75z"/></svg>
                            </a>
                            <a href="#" aria-label="Twitter" class="text-[color:var(--muted)] hover:text-[color:var(--primary)]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 7.5v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                            </a>
                            <a href="#" aria-label="LinkedIn" class="text-[color:var(--muted)] hover:text-[color:var(--primary)]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5A2.5 2.5 0 004 6v12a2.5 2.5 0 002.48 2.5H19.5A2.5 2.5 0 0022 18V6a2.5 2.5 0 00-2.5-2.5H4.98zM8 10.5V17H5.5v-6.5H8zm-1.25-3A1.25 1.25 0 116.5 6 1.25 1.25 0 016.75 7.5zM12 10.5v1.1a3.5 3.5 0 013.25-1.8c3.5 0 4 2.3 4 5.2V17H16v-4.2c0-1 0-2.3-1.4-2.3s-1.6 1.1-1.6 2.2V17H10V10.5h2z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold">Tautan Cepat</h4>
                        <ul class="mt-3 space-y-2 text-sm text-[color:var(--muted)]">
                            <li><a href="#tentang" class="hover:text-[color:var(--primary)]">Tentang</a></li>
                            <li><a href="#program" class="hover:text-[color:var(--primary)]">Program</a></li>
                            <li><a href="#fitur" class="hover:text-[color:var(--primary)]">Fitur</a></li>
                            <li><a href="#testimoni" class="hover:text-[color:var(--primary)]">Testimoni</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold">Kontak</h4>
                        <div class="mt-3 text-sm text-[color:var(--muted)]">
                            <div>Email: <a href="mailto:hello@mrycode.id" class="hover:text-[color:var(--primary)]">hello@mrycode.id</a></div>
                            <div class="mt-2">Alamat: Jakarta, Indonesia</div>
                            <div class="mt-2">Jam: Senin–Jumat, 09:00–17:00</div>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold">Dapatkan update</h4>
                        <p class="mt-2 text-sm text-[color:var(--muted)]">Langganan newsletter untuk tips belajar dan info program.</p>
                        <form id="footer-newsletter-form" class="mt-4 flex gap-2" method="POST" action="{{ route('subscribe') }}">
                            @csrf
                            <label for="footer-email" class="sr-only">Email</label>
                            <input id="footer-email" name="email" type="email" placeholder="Email kamu" required class="w-full px-3 py-2 rounded-md border border-gray-200 placeholder:text-[color:var(--muted)] text-slate-700 focus:outline-none focus:ring-2 focus:ring-[color:var(--primary-700)]" />
                            <button type="submit" class="px-4 py-2 rounded-md btn-primary">Subscribe</button>
                        </form>
                        <div class="mt-4 text-xs text-[color:var(--muted)]">Kami tidak akan membagikan emailmu. Kamu bisa berhenti berlangganan kapan saja.</div>
                    </div>
                </div>

                <div class="border-t mt-8 pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-[color:var(--muted)]">
                    <div>© 2026 MRY Code. All rights reserved.</div>
                    <div class="flex items-center gap-4">
                        <a href="#" class="hover:text-[color:var(--primary)]">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-[color:var(--primary)]">Syarat & Ketentuan</a>
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
                dots.forEach((d,i)=> d.className = i===idx ? 'w-3 h-3 rounded-full bg-[#2563EB]' : 'w-2 h-2 rounded-full bg-slate-300');
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
        // Lightweight motion: reveal on scroll, count-up, progress fill, parallax orbs
        (function(){
            const ease = t => (--t)*t*t+1;

            // Reveal on scroll (stagger support via data-delay)
            const io = new IntersectionObserver((entries)=>{
                entries.forEach(entry=>{
                    if(entry.isIntersecting){
                        const el = entry.target;
                        const delay = parseFloat(el.dataset.delay || 0);
                        setTimeout(()=> el.classList.add('revealed'), Math.round(delay*1000));
                        io.unobserve(el);
                    }
                });
            }, { threshold: 0.12 });

            document.querySelectorAll('.reveal').forEach(el=> io.observe(el));

            // Count-up
            function animateCount(el, target, ms=900){
                let start = null; const from = 0; target = +target; 
                function step(ts){
                    if(!start) start = ts; const prog = Math.min((ts-start)/ms,1);
                    el.textContent = Math.floor(ease(prog)*target);
                    if(prog<1) requestAnimationFrame(step); else el.textContent = target;
                }
                requestAnimationFrame(step);
            }
            const counters = document.querySelectorAll('.countup');
            counters.forEach(c=>{
                const targ = c.dataset.target || 0;
                const obs = new IntersectionObserver((ents, o)=>{ if(ents[0].isIntersecting){ animateCount(c, targ); o.unobserve(c); } }, {threshold:0.4});
                obs.observe(c);
            });

            // Progress fill animation
            const progress = document.querySelectorAll('.progress-fill');
            progress.forEach(p=>{
                const targ = p.dataset.target || 0;
                const label = p.closest('div').querySelector('.progress-label');
                const obs = new IntersectionObserver((ents, o)=>{ if(ents[0].isIntersecting){ p.style.width = targ + '%';
                        // animate label
                        let cur = 0; const dur = 1100; const start = performance.now();
                        (function t(now){ const prog = Math.min((now-start)/dur,1); const val = Math.round(prog * targ); if(label) label.textContent = val + '%'; if(prog<1) requestAnimationFrame(t); })(performance.now());
                        o.unobserve(p);
                    } }, {threshold: 0.2});
                obs.observe(p);
            });

            // Parallax orbs
            const orbs = Array.from(document.querySelectorAll('.bg-orb'));
            if(orbs.length){
                window.addEventListener('scroll', ()=>{
                    const sc = window.scrollY;
                    orbs.forEach((o,i)=>{ const speed = (i+1)*0.12; o.style.transform = `translateY(${sc*speed}px)`; });
                }, {passive:true});
            }

            // Simple testimonials auto-scroll (subtle)
            const tWrap = document.getElementById('testimonials-wrap');
            if(tWrap){
                let dir = 1; let pos = 0; const step = 0.3; setInterval(()=>{
                    const max = tWrap.scrollWidth - tWrap.clientWidth; if(max<=0) return; pos += step * dir; if(pos<0 || pos>max){ dir *= -1; pos = Math.max(0, Math.min(max, pos)); }
                    tWrap.scrollTo({ left: pos, behavior: 'smooth' });
                }, 2200);
            }

            // Minimal accessibility: reduce-motion respects
            const mq = window.matchMedia('(prefers-reduced-motion: reduce)');
            if(mq.matches){ document.querySelectorAll('.animate-float, .star-shimmer').forEach(e=> e.style.animation = 'none'); }
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
                    Swal.fire({ icon: 'error', title: 'Email kosong', text: 'Silakan masukkan alamat email yang valid.', confirmButtonColor: '#2563EB' });
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
                        Swal.fire({ icon: 'success', title: 'Terima kasih!', html: `<div>Email <strong>${data.email}</strong> telah terdaftar. Kami akan mengirimkan update ke kotak masuk Anda.</div>`, confirmButtonColor: '#2563EB' });
                        form.reset();
                    } else {
                        const err = await res.json().catch(()=>({message:'Terjadi kesalahan'}));
                        Swal.fire({ icon: 'error', title: 'Gagal', text: err.message || 'Gagal mendaftar', confirmButtonColor: '#2563EB' });
                    }
                } catch (err) {
                    Swal.fire({ icon: 'error', title: 'Gagal', text: 'Tidak dapat menghubungi server.', confirmButtonColor: '#2563EB' });
                }
            });
        })();
    </script>
</body>
</html>
