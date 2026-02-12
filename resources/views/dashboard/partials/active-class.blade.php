@if(isset($activeClass) && $activeClass)
    <article class="card-active mt-4 bg-white rounded-xl p-6 card-hover reveal" data-delay="0.08">
        <div class="flex flex-col lg:flex-row items-start gap-6">
            <div class="w-full lg:w-1/3">
                <div class="h-40 bg-gray-100 rounded-lg overflow-hidden">
                    <img src="{{ $activeClass->thumbnail ?? '/images/class-placeholder.png' }}" alt="{{ $activeClass->title }}" class="w-full h-full object-cover" />
                </div>
            </div>
            <div class="flex-1">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <div class="text-sm text-[color:var(--muted)]">{{ ucfirst($activeClass->level ?? 'Beginner') }}</div>
                        <h3 class="mt-1 text-lg font-semibold">{{ $activeClass->title ?? 'Nama Kelas' }}</h3>
                        <div class="mt-2 text-sm text-[color:var(--muted)]">Instruktur: {{ $activeClass->instructor ?? '-' }}</div>
                    </div>
                    <div class="text-right">
                        <div class="text-sm text-[color:var(--muted)]">Dibuat</div>
                        <div class="font-semibold">{{ optional($activeClass->created_at)->diffForHumans() ?? '—' }}</div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="text-sm text-[color:var(--muted)]">Durasi</div>
                    <div class="mt-2 text-sm font-semibold">{{ $activeClass->duration ?? '—' }} jam</div>
                    <div class="mt-2 text-sm text-[color:var(--muted)]">{{ \Illuminate\Support\Str::limit($activeClass->description ?? '', 160) }}</div>
                </div>

                <div class="mt-4">
                    <a href="/classes/{{ $activeClass->id ?? '#' }}" class="px-4 py-2 rounded-lg btn-primary">Lihat Kelas</a>
                </div>
            </div>
        </div>
    </article>
@else
    <div class="mt-4 text-[color:var(--muted)]">Kamu belum terdaftar di kelas aktif. Coba lihat rekomendasi di bawah.</div>
@endif
