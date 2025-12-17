@extends('layouts.portfolio')

@section('title', 'Pengalaman')

@section('content')
    <div class="max-w-4xl mx-auto px-6 py-12">

        <div class="mb-16">
            <h1 class="text-4xl font-bold text-white mb-4">Riwayat <span class="text-blue-500">Pengalaman</span></h1>
            <p class="text-slate-400 italic">Rekam jejak profesional dan kontribusi organisasi saya.</p>
        </div>

        <section class="mb-20">
            <div class="flex items-center gap-3 mb-10 border-b border-slate-800 pb-4">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <h2 class="text-2xl font-bold text-white uppercase tracking-wider">Pengalaman Kerja</h2>
            </div>

            <div class="space-y-12 border-l-2 border-slate-800 ml-3">
                <div
                    class="relative pl-8 before:absolute before:left-[-9px] before:top-1.5 before:w-4 before:h-4 before:bg-blue-500 before:rounded-full before:shadow-[0_0_15px_rgba(59,130,246,0.5)]">
                    <div class="flex flex-col md:flex-row md:justify-between items-start mb-1">
                        <h3 class="text-xl font-bold text-white group-hover:text-blue-500 transition">Bidang Informasi dan
                            Komunikasi Publik
                            (Internship)</h3>
                        <span
                            class="text-[11px] font-mono font-bold text-blue-500 bg-blue-500/10 border border-blue-500/20 px-3 py-1 rounded-full uppercase">Sep
                            2024 — Okt 2024</span>
                    </div>
                    <p class="text-slate-300 font-medium mb-4">Diskominfo Kota Madiun</p>
                    <ul class="text-slate-400 text-sm leading-relaxed list-none space-y-3">
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 mt-1.5 leading-none">•</span>
                            <span>Menganalisis komunikasi publik berbasis media sosial menggunakan teknik SEO untuk
                                meningkatkan visibilitas pemerintah.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 mt-1.5 leading-none">•</span>
                            <span>Mengoptimasi konten digital guna memastikan informasi tersampaikan secara efektif kepada
                                masyarakat.</span>
                        </li>
                    </ul>
                </div>

                <div
                    class="relative pl-8 before:absolute before:left-[-9px] before:top-1.5 before:w-4 before:h-4 before:bg-slate-700 before:rounded-full transition-all">
                    <div class="flex flex-col md:flex-row md:justify-between items-start mb-1">
                        <h3 class="text-xl font-bold text-white">Digital Marketing (Staff)</h3>
                        <span
                            class="text-[11px] font-mono font-bold text-blue-500 bg-blue-500/10 border border-blue-500/20 px-3 py-1 rounded-full uppercase">Des
                            2021 — Nov 2025</span>
                    </div>
                    <p class="text-slate-300 font-medium mb-4">Gubuk Kamera Gresik</p>
                    <ul class="text-slate-400 text-sm leading-relaxed list-none space-y-3">
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 mt-1.5 leading-none">•</span>
                            <span>Mengembangkan strategi pemasaran untuk meningkatkan penjualan kamera dan aksesori.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-blue-500 mt-1.5 leading-none">•</span>
                            <span>Mengoptimalkan kampanye pemasaran digital, termasuk iklan online, konten kreatif, SEO, dan
                                manajemen marketplace.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="flex items-center gap-3 mb-10 border-b border-slate-800 pb-4">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
                <h2 class="text-2xl font-bold text-white uppercase tracking-wider">Pengalaman Organisasi</h2>
            </div>

            <div class="grid gap-6">
                <div
                    class="p-8 bg-slate-900/40 border border-slate-800 rounded-2xl hover:border-blue-500/30 transition-all group">
                    <div class="flex flex-col md:flex-row md:justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-white group-hover:text-blue-500 transition">Himpunan Mahasiswa
                                Informatika (HMIF)</h3>
                            <p class="text-blue-500 text-sm font-semibold">Universitas Internasional Semen Indonesia</p>
                        </div>
                        <span class="text-[10px] font-bold text-slate-500 uppercase mt-2 md:mt-0 tracking-widest">2
                            Periode</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300 mb-3 font-medium italic text-sm">
                        <span class="w-4 h-[1px] bg-blue-500"></span>
                        Staff Hubungan Masyarakat (Humas)
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Bertanggung jawab sebagai jembatan komunikasi antara program studi Informatika dengan pihak
                        eksternal, mengelola kerjasama, serta menyebarkan informasi publik departemen.
                    </p>
                </div>
            </div>
        </section>

    </div>
@endsection
