@extends('layouts.portfolio')

@section('title', 'Experience - Helmaesa Diego Putra')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-12">

        <div class="mb-16 text-center md:text-left" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-black italic uppercase tracking-tighter adaptive-heading mb-4">
                Pengalaman <span class="text-blue-600">Saya</span>
            </h1>
            <p class="adaptive-text text-lg max-w-2xl opacity-80 leading-relaxed">
                Rekam jejak profesional, eksplorasi teknologi, dan kontribusi strategis saya dalam dunia kerja serta
                organisasi.
            </p>
        </div>

        <section class="mb-24">
            <div class="flex items-center gap-4 mb-12" data-aos="fade-right">
                <div class="p-3 bg-blue-600/10 rounded-xl border border-blue-600/20">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-black uppercase italic tracking-wider adaptive-heading">Pengalaman Kerja</h2>
            </div>

            <div class="space-y-8 relative">
                <div
                    class="absolute left-0 md:left-8 top-0 bottom-0 w-px bg-gradient-to-b from-blue-600/50 via-slate-800 to-transparent">
                </div>

                @php
                    $workExp = [
                        [
                            'role' => 'Bidang Informasi dan Komunikasi Publik (Intern)',
                            'company' => 'Diskominfo Kota Madiun',
                            'period' => 'Sep 2024 — Okt 2024',
                            'active' => true,
                            'desc' => [
                                'Menganalisis komunikasi publik berbasis media sosial menggunakan teknik SEO untuk meningkatkan visibilitas pemerintah.',
                                'Mengoptimasi konten digital guna memastikan informasi tersampaikan secara efektif kepada masyarakat.',
                            ],
                        ],
                        [
                            'role' => 'Digital Marketing (Staff)',
                            'company' => 'Gubuk Kamera Gresik',
                            'period' => 'Des 2021 — Nov 2025',
                            'active' => false,
                            'desc' => [
                                'Mengembangkan strategi pemasaran untuk meningkatkan penjualan kamera dan aksesori.',
                                'Mengoptimalkan kampanye pemasaran digital melalui manajemen marketplace dan iklan kreatif.',
                            ],
                        ],
                    ];
                @endphp

                @foreach ($workExp as $index => $exp)
                    <div class="relative pl-8 md:pl-20 group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div
                            class="absolute left-[-4px] md:left-[28px] top-2 w-2 h-2 rounded-full transition-all duration-500 {{ $exp['active'] ? 'bg-blue-600 ring-4 ring-blue-600/20 shadow-[0_0_15px_#2563eb]' : 'bg-slate-700' }}">
                        </div>

                        <div
                            class="glass-effect p-6 md:p-8 rounded-3xl hover:translate-x-2 transition-all duration-300 group-hover:border-blue-600/30 group-hover:shadow-blue-600/5 shadow-xl">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-6">
                                <div>
                                    <h3
                                        class="text-xl font-bold adaptive-heading group-hover:text-blue-600 transition-colors">
                                        {{ $exp['role'] }}</h3>
                                    <p class="text-blue-600 font-semibold text-sm">{{ $exp['company'] }}</p>
                                </div>
                                <span
                                    class="text-[10px] md:text-xs font-mono font-bold px-4 py-1.5 rounded-full border border-blue-600/20 bg-blue-600/5 text-blue-600 uppercase tracking-tighter">
                                    {{ $exp['period'] }}
                                </span>
                            </div>
                            <ul class="space-y-4">
                                @foreach ($exp['desc'] as $list)
                                    <li class="flex items-start gap-3 adaptive-text opacity-80 text-sm leading-relaxed">
                                        <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4" />
                                        </svg>
                                        <span>{{ $list }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <div class="flex items-center gap-4 mb-12" data-aos="fade-right">
                <div class="p-3 bg-indigo-600/10 rounded-xl border border-indigo-600/20">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-black uppercase italic tracking-wider adaptive-heading">Pengalaman Organisasi</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="glass-effect p-8 rounded-3xl group hover:-translate-y-2 transition-all duration-300"
                    data-aos="zoom-in">
                    <div class="flex justify-between items-start mb-6">
                        <div
                            class="w-12 h-12 bg-indigo-600 rounded-2xl flex items-center justify-center text-white font-black text-xl shadow-lg shadow-indigo-600/20">
                            H
                        </div>
                        <span
                            class="text-[10px] font-bold text-indigo-600 border border-indigo-600/20 px-3 py-1 rounded-lg uppercase tracking-widest bg-indigo-600/5">
                            2 Periode
                        </span>
                    </div>
                    <h3 class="text-xl font-bold adaptive-heading mb-2 group-hover:text-indigo-600 transition-colors">
                        Himpunan Mahasiswa Informatika</h3>
                    <p class="text-xs font-bold text-indigo-600/80 mb-4 uppercase tracking-tighter">Staff Hubungan
                        Masyarakat (Humas)</p>
                    <p class="adaptive-text text-sm opacity-70 leading-relaxed">
                        Bertanggung jawab sebagai jembatan komunikasi antara program studi Informatika dengan pihak
                        eksternal serta mengelola kerjasama departemen.
                    </p>

                    <div class="mt-8 pt-6 border-t border-slate-800 flex gap-2">
                        <span
                            class="text-[9px] px-2 py-1 bg-slate-500/10 rounded-md adaptive-text font-mono">#Communication</span>
                        <span
                            class="text-[9px] px-2 py-1 bg-slate-500/10 rounded-md adaptive-text font-mono">#Management</span>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <style>
        /* Custom style tambahan jika diperlukan untuk section ini */
        .glass-effect {
            /* Memastikan card terlihat di kedua tema */
            background: var(--glass-bg);
            border: 1px solid var(--border-color);
        }
    </style>
@endsection
