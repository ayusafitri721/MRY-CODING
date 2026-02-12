<div class="mt-10 grid lg:grid-cols-3 gap-6">
    <div class="bg-white rounded-xl p-4 card-hover reveal">
        <div class="text-sm text-[color:var(--muted)]">Total jam belajar bulan ini</div>
        <div class="mt-2 text-2xl font-semibold">{{ $summary['hours_this_month'] ?? '12h' }}</div>
        <div class="mt-3 text-sm text-[color:var(--muted)]">Teruskan konsistensi; 15 menit sehari lebih baik daripada tidak sama sekali.</div>
    </div>

    <div class="bg-white rounded-xl p-4 card-hover reveal">
        <div class="text-sm text-[color:var(--muted)]">Modul selesai</div>
        <div class="mt-2 text-2xl font-semibold">{{ $summary['modules_done'] ?? 4 }}</div>
        <div class="mt-3 text-sm text-[color:var(--muted)]">Setiap modul selesai mendekatkanmu ke portofolio kerja.</div>
    </div>

    <div class="bg-white rounded-xl p-4 card-hover reveal">
        <div class="text-sm text-[color:var(--muted)]">Learning Streak</div>
        <div class="mt-2 text-2xl font-semibold">{{ $summary['streak'] ?? '—' }}</div>
        <div class="mt-3 text-sm text-[color:var(--muted)]">Jaga streak untuk mendapatkan reward dan motivasi.</div>
    </div>
</div>
