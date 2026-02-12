<div class="welcome-card glass rounded-xl p-6 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 reveal" data-delay="0.05">
    <div class="flex-1">
        <div class="text-sm text-[color:var(--muted)]">Halo, <span class="font-semibold">{{ $user->name ?? 'Pelajar' }}</span></div>
        <h1 class="mt-2 text-2xl lg:text-3xl font-extrabold">Siap lanjutkan perjalanan codingmu hari ini?</h1>
        <p class="mt-2 text-sm text-[color:var(--muted)] max-w-xl">Lanjutkan dari dimana kamu berhenti, kerjakan tugas, dan capai milestone berikutnya.</p>

        <div class="mt-4 flex flex-wrap gap-3">
            <div class="p-3 bg-white rounded-lg shadow-sm flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[color:var(--primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3"/></svg>
                <div>
                    <div class="text-xs text-[color:var(--muted)]">Kelas Aktif</div>
                    <div class="font-semibold">{{ $summary['active_classes'] ?? 0 }}</div>
                </div>
            </div>

            <div class="p-3 bg-white rounded-lg shadow-sm flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[color:var(--primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12h18"/></svg>
                <div>
                    <div class="text-xs text-[color:var(--muted)]">Rata-rata Progress</div>
                    <div class="font-semibold">{{ $summary['avg_progress'] ?? 0 }}%</div>
                </div>
            </div>

            <div class="p-3 bg-white rounded-lg shadow-sm flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[color:var(--primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3"/></svg>
                <div>
                    <div class="text-xs text-[color:var(--muted)]">Tugas Belum Selesai</div>
                    <div class="font-semibold">{{ $summary['pending_tasks'] ?? 0 }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-96">
        <div class="text-sm text-[color:var(--muted)]">Progress Total</div>
        <div class="mt-2 w-full bg-white rounded-full h-3 overflow-hidden">
            <div class="progress-fill" data-target="{{ $summary['avg_progress'] ?? 0 }}"></div>
        </div>
        <div class="mt-4 flex items-center gap-3 justify-end">
            <a href="/classes" class="px-4 py-2 rounded-lg btn-outline-primary">Lihat Semua Kelas</a>
            <a href="/classes/{{ $activeClass->id ?? '#' }}" class="px-4 py-2 rounded-lg btn-primary">Lanjutkan Belajar</a>
        </div>
    </div>
</div>
