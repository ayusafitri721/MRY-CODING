<div>
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold">Explore Semua Kelas</h2>
        <div class="flex gap-3 items-center">
            <input id="search" type="search" placeholder="Cari kelas, topik, mentor..." class="px-3 py-2 rounded-lg border w-64" />
            <select id="filter-level" class="px-3 py-2 rounded-lg border">
                <option value="">Semua level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>
        </div>
    </div>

    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($classes ?? [] as $class)
            <div class="bg-white rounded-xl p-4 card-hover reveal">
                <div class="h-40 rounded-md overflow-hidden">
                    <img src="{{ $class->thumbnail ?? '/images/class-placeholder.png' }}" alt="{{ $class->title }}" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="mt-3 flex items-center justify-between">
                    <h3 class="font-semibold">{{ $class->title }}</h3>
                    <div class="text-xs px-2 py-1 rounded bg-[color:var(--primary-100)] text-[color:var(--primary)]">{{ $class->level ?? 'Beginner' }}</div>
                </div>
                <div class="mt-2 text-sm text-[color:var(--muted)]">{{ $class->modules_count ?? 6 }} modul • {{ $class->duration ?? '8 Minggu' }}</div>
                <div class="mt-4 flex items-center justify-between">
                    <div class="text-sm text-[color:var(--muted)]">{{ $class->students ?? 80 }} siswa</div>
                    <a href="/classes/{{ $class->id }}" class="text-[color:var(--primary)] font-semibold">Lihat Silabus</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
