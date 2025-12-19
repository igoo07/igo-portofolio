@extends('layouts.portfolio')

@section('title', 'Tentang Saya')

@section('content')
    <div class="max-w-6xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-white mb-16 italic">
            <span class="text-blue-500">About</span> me
        </h1>

        <div class="grid md:grid-cols-12 gap-12 items-start mb-24">
            <div class="md:col-span-5 flex justify-center relative group">
                <div
                    class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-64 bg-blue-600/10 rounded-full blur-[100px] group-hover:bg-blue-600/20 transition-all duration-700">
                </div>

                <div class="relative z-10 w-full max-w-[320px]">
                    <img src="{{ url('images/ig.png') }}" alt="Helmaesa Diego Putra"
                        class="relative z-20 w-full h-auto object-contain transition-all duration-700 ease-in-out group-hover:scale-105 drop-shadow-[0_10px_30px_rgba(59,130,246,0.2)]">

                    <div
                        class="absolute inset-x-0 bottom-0 h-24 z-30 bg-gradient-to-t from-[#0f172a] via-[#0f172a]/80 to-transparent pointer-events-none">
                    </div>
                </div>
            </div>

            <div class="md:col-span-7 space-y-6 pt-2">
                <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                    <span class="w-10 h-[2px] bg-blue-500"></span>
                    Profil
                </h2>
                <div class="space-y-5 text-slate-400 leading-relaxed text-justify border-l border-slate-800 pl-6 ml-1">
                    <p>
                        Lulusan Informatika UISI yang memiliki spesialisasi ganda dalam
                        <span class="text-white font-semibold">Software Engineering dan Digital Marketing.</span>.
                        Berpengalaman mengembangkan sistem informasi berbasis web (Laravel & ReactJS) dan mengoptimalkan
                        visibilitas digital melalui strategi SEO serta manajemen marketplace.
                    </p>
                    <p>
                        Telah tersertifikasi sebagai
                        <span class="text-blue-400 italic">Oracle Certified
                            Foundations Associate</span>, menunjukkan standar profesional dalam infrastruktur cloud dan
                        pengembangan sistem.
                        Saya adalah pribadi yang adaptif, komunikatif, dan
                        memiliki jiwa semangat tinggi, dapat diandalkan, serta mahir dalam berkolaborasi lintas departemen
                        untuk
                        memberikan solusi digital yang komprehensif.
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-24">
            <h2 class="text-2xl font-bold text-white flex items-center gap-3 mb-10">
                <span class="w-10 h-[2px] bg-blue-500"></span>
                Pendidikan
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div
                    class="relative p-8 bg-slate-900/40 border border-slate-800 rounded-2xl hover:border-blue-500/30 transition-all duration-500 group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l11 6 9-4.91V17h2V9M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z" />
                        </svg>
                    </div>
                    <span
                        class="inline-block px-3 py-1 rounded-full bg-blue-500/10 text-blue-500 text-xs font-mono mb-4">2021
                        — 2025</span>
                    <h4 class="text-white font-bold text-xl mb-1">S1 Informatika</h4>
                    <p class="text-slate-400 text-sm">Universitas Internasional Semen Indonesia</p>
                </div>

                <div
                    class="relative p-8 bg-slate-900/40 border border-slate-800 rounded-2xl hover:border-slate-700 transition-all duration-500 group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l11 6 9-4.91V17h2V9M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z" />
                        </svg>
                    </div>
                    <span
                        class="inline-block px-3 py-1 rounded-full bg-slate-800 text-slate-500 text-xs font-mono mb-4">2018
                        — 2021</span>
                    <h4 class="text-white font-bold text-xl mb-1">Bisnis Daring & Pemasaran</h4>
                    <p class="text-slate-400 text-sm">SMK Negeri 1 Bangsri</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-900/50 border border-slate-800 p-8 md:p-10 rounded-3xl">

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
                    /* Perbaikan Slug Disini */
                    ['name' => 'Word', 'icon' => 'microsoftword', 'color' => '2B579A'],
                    ['name' => 'Excel', 'icon' => 'microsoftexcel', 'color' => '217346'],
                    ['name' => 'Canva', 'icon' => 'canva', 'color' => '00C4CC'],
                    /* VN Editor menggunakan logo alternatif video/vlc */
                    ['name' => 'VN Editor', 'icon' => 'vlcmediaplayer', 'color' => 'FF8800'],
                ];
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-5 mb-12">
                @foreach ($skills as $skill)
                    <div class="glass-effect group flex flex-col items-center p-6 rounded-2xl border border-white/5 hover:border-blue-500/40 transition-all duration-300 hover:-translate-y-2 shadow-lg"
                        data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">

                        <div class="relative mb-4">
                            <div
                                class="absolute inset-0 bg-[#{{ $skill['color'] }}]/20 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full">
                            </div>

                            <img src="https://cdn.simpleicons.org/{{ $skill['icon'] }}/{{ $skill['color'] }}"
                                alt="{{ $skill['name'] }}" loading="lazy"
                                class="w-10 h-10 relative z-10 group-hover:scale-110 transition-transform duration-500 antialiased"
                                onerror="this.onerror=null; this.src='https://cdn.simpleicons.org/{{ $skill['icon'] }}';">
                        </div>

                        <span
                            class="text-[10px] font-bold adaptive-text opacity-60 group-hover:opacity-100 group-hover:text-blue-500 transition-all uppercase tracking-[0.2em] text-center">
                            {{ $skill['name'] }}
                        </span>
                    </div>
                @endforeach
            </div>

            <div
                class="relative overflow-hidden p-6 md:p-8 bg-slate-950 border border-slate-800 rounded-2xl flex flex-col md:flex-row items-center gap-8 group hover:border-blue-500/30 transition-all duration-500">
                <div class="relative w-full md:w-44 h-28 rounded-xl overflow-hidden bg-slate-900 shadow-inner">
                    <img src="{{ asset('images/sertifikat-oracle.jpg') }}" alt="Oracle Certificate"
                        class="w-full h-full object-cover opacity-50 group-hover:opacity-100 transition-all duration-700 scale-105 group-hover:scale-110">
                </div>

                <div class="flex-grow text-center md:text-left">
                    <p class="text-blue-500 font-bold uppercase tracking-widest text-[9px] mb-2">Certification</p>
                    <h4 class="text-white font-bold text-xl mb-1">Oracle Certified Foundations Associate</h4>
                    <p class="text-slate-500 text-sm">Diterbitkan Januari 2025</p>
                </div>

                <div class="w-full md:w-auto">
                    <a href="{{ asset('images/sertifikat-oracle.jpg') }}" download
                        class="inline-block w-full text-center px-8 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold text-sm transition-all shadow-lg shadow-blue-500/20 active:scale-95">
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
