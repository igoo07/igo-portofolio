@extends('layouts.portfolio')

@section('title', 'Tentang Saya')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-white mb-12 italic"><span class="text-blue-500">Profil</span> & Kapabilitas</h1>

        <div class="grid md:grid-cols-2 gap-16 mb-20">
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-blue-500"></span>
                    Profil Profesional
                </h2>
                <p class="text-slate-400 leading-relaxed text-justify">
                    Saya adalah lulusan Program Studi Informatika dari Universitas Internasional Semen Indonesia. Saya
                    adalah
                    seorang pengembang perangkat lunak yang berfokus pada efisiensi kode dan skalabilitas sistem. Memiliki
                    fondasi kuat dalam arsitektur MVC (Laravel) dan pengembangan antarmuka modern menggunakan ReactJS.
                </p>
                <p class="text-slate-400 leading-relaxed text-justify">
                    Keunikan saya terletak pada perpaduan keahlian teknis dan pemahaman Digital Marketing/SEO. Hal ini
                    memungkinkan saya membangun produk digital yang tidak hanya berfungsi secara teknis, tetapi juga optimal
                    dari sisi visibilitas mesin pencari dan pengalaman pengguna (UX).
                </p>
                <p class="text-slate-400 leading-relaxed text-justify">
                    Saya berkomitmen untuk terus beradaptasi dengan teknologi terbaru, terbukti dengan sertifikasi global
                    yang saya raih untuk memperkuat kredibilitas saya di industri teknologi.
                </p>
            </div>

            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-blue-500"></span>
                    Pendidikan
                </h2>
                <div class="relative border-l border-slate-800 pl-6 space-y-10">
                    <div class="relative">
                        <div class="absolute -left-[30px] top-1 w-4 h-4 bg-blue-500 rounded-full border-4 border-slate-950">
                        </div>
                        <h4 class="font-bold text-white text-lg leading-tight">S1 Informatika</h4>
                        <p class="text-blue-500 text-sm font-medium mb-2">Universitas Internasional Semen Indonesia</p>
                        <p class="text-slate-500 text-xs font-mono uppercase">2021 — 2025</p>
                    </div>
                    <div class="relative">
                        <div
                            class="absolute -left-[30px] top-1 w-4 h-4 bg-slate-700 rounded-full border-4 border-slate-950">
                        </div>
                        <h4 class="font-bold text-white text-lg leading-tight">Bisnis Daring & Pemasaran</h4>
                        <p class="text-slate-400 text-sm font-medium mb-2">SMK Negeri 1 Bangsri</p>
                        <p class="text-slate-500 text-xs font-mono uppercase">2018 — 2021</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-slate-900/50 border border-slate-800 p-10 rounded-3xl">
            <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                Keahlian Teknis
            </h2>

            @php
                $skills = [
                    ['name' => 'HTML5', 'icon' => 'html5', 'color' => 'E34F26'],
                    ['name' => 'JavaScript', 'icon' => 'javascript', 'color' => 'F7DF1E'],
                    ['name' => 'Laravel', 'icon' => 'laravel', 'color' => 'FF2D20'],
                    ['name' => 'React', 'icon' => 'react', 'color' => '61DAFB'],
                    ['name' => 'Tailwind', 'icon' => 'tailwindcss', 'color' => '06B6D4'],
                    ['name' => 'MySQL', 'icon' => 'mysql', 'color' => '4479A1'],
                    ['name' => 'Figma', 'icon' => 'figma', 'color' => 'F24E1E'],
                    ['name' => 'Git', 'icon' => 'git', 'color' => 'F05032'],

                    // Perbaikan slug ikon agar muncul
                    ['name' => 'Word', 'icon' => 'microsoftword', 'color' => '2B579A'], // Biru Word
                    ['name' => 'Excel', 'icon' => 'microsoftexcel', 'color' => '217346'], // Hijau Excel
                    ['name' => 'Canva', 'icon' => 'canva', 'color' => '00C4CC'], // Toska Canva
                    ['name' => 'VN Editor', 'icon' => 'vlcmediaplayer', 'color' => 'FF8800'],
                ];
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-6 mb-10">
                @foreach ($skills as $skill)
                    <div
                        class="flex flex-col items-center p-6 bg-slate-950 border border-slate-800 rounded-2xl hover:border-blue-500/50 transition-all group shadow-sm">
                        <img src="https://cdn.simpleicons.org/{{ $skill['icon'] }}/{{ $skill['color'] }}"
                            alt="{{ $skill['name'] }}"
                            class="w-10 h-10 mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span
                            class="text-[11px] font-bold text-slate-400 group-hover:text-white transition uppercase tracking-tighter text-center">
                            {{ $skill['name'] }}
                        </span>
                    </div>
                @endforeach
            </div>

            <div
                class="relative overflow-hidden p-6 bg-slate-900 border border-slate-800 rounded-3xl flex flex-col md:flex-row items-center gap-8 group hover:border-blue-500/50 transition-all duration-500">

                <div
                    class="relative w-full md:w-48 h-32 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 shadow-2xl">
                    <img src="{{ asset('images/sertifikat-oracle.jpg') }}" alt="Oracle Certificate"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-60 group-hover:opacity-100"
                        onerror="this.src='https://via.placeholder.com/400x250/0f172a/3b82f6?text=Preview+Sertifikat'">
                    <div
                        class="absolute inset-0 bg-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                    </div>
                </div>

                <div class="flex-grow text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                        <p class="text-blue-500 font-bold italic uppercase tracking-[0.2em] text-[10px]">Certification</p>
                    </div>
                    <h4 class="text-white font-extrabold text-xl mb-1 tracking-tight">Oracle Certified Foundations Associate
                    </h4>
                    <p class="text-slate-400 text-sm italic">Diterbitkan Januari 2025</p>
                </div>

                <div class="w-full md:w-auto">
                    <a href="{{ asset('images/sertifikat-oracle.jpg') }}" download="Sertifikat_Oracle_Diego.pdf"
                        class="flex items-center justify-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold text-sm transition-all shadow-lg shadow-blue-500/20 active:scale-95 group/btn">
                        <svg class="w-5 h-5 transform group-hover/btn:-translate-y-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download PDF
                    </a>
                </div>

                <div class="absolute -right-6 -bottom-6 opacity-[0.02] group-hover:opacity-[0.05] transition-opacity">
                    <img src="https://cdn.simpleicons.org/oracle/white" class="w-40 h-40">
                </div>
            </div>
        @endsection
