<div>
    <h2 class="text-xl font-semibold">Direkomendasikan untuk Kamu</h2>
    <div class="mt-4 overflow-x-auto snap-x flex gap-4 py-3">
        @foreach($recommendations ?? [] as $rec)
            <div class="min-w-[280px] bg-white rounded-xl p-4 card-hover reveal" style="scroll-snap-align:center;">
                <div class="h-36 rounded-md overflow-hidden">
                    <img src="{{ $rec->thumbnail ?? '/images/class-placeholder.png' }}" class="w-full h-full object-cover" alt="{{ $rec->title }}" loading="lazy" />
                </div>
                <div class="mt-3">
                    <div class="text-sm text-[color:var(--muted)]">{{ $rec->level ?? 'Beginner' }}</div>
                    <h3 class="font-semibold mt-1">{{ $rec->title }}</h3>
                    <div class="mt-2 flex items-center justify-between text-sm text-[color:var(--muted)]">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .587l3.668 7.431L24 9.748l-6 5.848L19.335 24 12 20.201 4.665 24 6 15.596 0 9.748l8.332-1.73z"/></svg>
                            <div>{{ $rec->rating ?? '4.8' }}</div>
                        </div>
                        <div class="text-sm">{{ $rec->students ?? '120' }} siswa</div>
                    </div>
                    <div class="mt-3 flex items-center justify-between">
                        <div class="text-sm text-[color:var(--muted)]">{{ $rec->duration ?? '8 Minggu' }}</div>
                        <a href="/classes/{{ $rec->id }}" class="text-[color:var(--primary)] font-semibold">Lihat Detail →</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
