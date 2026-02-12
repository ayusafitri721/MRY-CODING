@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[color:var(--light-bg)]">
    <div class="max-w-7xl mx-auto px-6 py-8">
        @include('dashboard.partials.welcome')

        <div class="mt-8">
            <h2 class="text-xl font-semibold">Kelas Aktif</h2>
            @include('dashboard.partials.active-class')
        </div>

        <div class="mt-10">
            @include('dashboard.partials.recommendations')
        </div>

        <div class="mt-10">
            @include('dashboard.partials.explore')
        </div>

        <div class="mt-10">
            @include('dashboard.partials.stats')
        </div>
    </div>
</div>

@push('styles')
<style>
    :root{ --primary:#2563EB; --primary-700:#1E40AF; --light-bg:#EFF6FF; --muted:#6B7280 }
    .glass{ background: linear-gradient(180deg, rgba(255,255,255,0.8), rgba(255,255,255,0.7)); backdrop-filter: blur(6px); }
    .card-hover{ transition: transform .22s cubic-bezier(.2,.9,.2,1), box-shadow .22s; }
    .card-hover:hover{ transform: translateY(-6px); box-shadow: 0 18px 40px rgba(15,23,42,0.08); border:1px solid rgba(37,99,235,0.06); }
    .progress-fill{ width:0%; height:100%; background: linear-gradient(90deg,var(--primary), #3B82F6); transition: width 1.1s cubic-bezier(.2,.9,.2,1); }
    .reveal{ opacity:0; transform: translateY(8px); transition: opacity .6s cubic-bezier(.2,.9,.2,1), transform .6s cubic-bezier(.2,.9,.2,1); }
    .reveal.revealed{ opacity:1; transform: translateY(0); }
    .btn-primary{ background:var(--primary); color:white; }
    .btn-outline-primary{ border:1px solid var(--primary); color:var(--primary); background:white; }
</style>
@endpush

@push('scripts')
<script>
// Dashboard small JS: reveal, progress anim, debounce search
(function(){
    const io = new IntersectionObserver((entries)=>{
        entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('revealed'); io.unobserve(e.target); } });
    }, {threshold: 0.12});
    document.querySelectorAll('.reveal').forEach(el=> io.observe(el));

    // animate progress fields
    document.querySelectorAll('.progress-fill').forEach(p=>{
        const targ = p.dataset.target || p.dataset.progress || 0;
        const obs = new IntersectionObserver((ents, o)=>{ if(ents[0].isIntersecting){ p.style.width = targ + '%'; o.unobserve(p); } }, {threshold: 0.2});
        obs.observe(p);
    });

    // search debounce
    const search = document.getElementById('search'); let t;
    if(search){ search.addEventListener('input', ()=>{ clearTimeout(t); t = setTimeout(()=>{ /* implement AJAX or form submit */ console.log('search:', search.value); }, 350); }); }
})();
</script>
@endpush

@endsection
