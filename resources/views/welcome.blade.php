<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Helmaesa Diego Putra | Portfolio</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-950 text-slate-200 selection:bg-blue-500 selection:text-white">

    <nav class="fixed w-full z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 font-bold text-2xl tracking-tighter text-blue-500">
                    i.DEV
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8 text-sm font-medium">
                        <a href="#about" class="hover:text-blue-400 transition">Tentang</a>
                        <a href="#experience" class="hover:text-blue-400 transition">Pengalaman</a>
                        <a href="#projects" class="hover:text-blue-400 transition">Proyek</a>
                        <a href="mailto:helmaesad@gmail.com"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center lg:text-left grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span
                        class="inline-block px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-xs font-semibold tracking-wider uppercase mb-4">
                        Tersedia untuk Kerja / Proyek Freelance
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-extrabold text-white mb-6 leading-tight">
                        Helmaesa <br> <span class="text-blue-500">Diego Putra</span>
                    </h1>
                    <p class="text-lg text-slate-400 mb-8 max-w-xl mx-auto lg:mx-0">
                        Lulusan **Informatika UISI** (S.Kom) yang berdedikasi membangun aplikasi web interaktif
                        menggunakan **Laravel** dan **ReactJS**. Berpengalaman dalam strategi Digital Marketing dan SEO.
                    </p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                        <a href="https://github.com/igoo7" target="_blank"
                            class="flex items-center gap-2 bg-slate-800 hover:bg-slate-700 px-6 py-3 rounded-xl transition">
                            <span class="font-semibold">GitHub</span>
                        </a>
                        <a href="https://www.linkedin.com/in/helmaesa-diego-putra-013546351/" target="_blank"
                            class="flex items-center gap-2 bg-slate-800 hover:bg-slate-700 px-6 py-3 rounded-xl transition">
                            <span class="font-semibold">LinkedIn</span>
                        </a>
                    </div>
                </div>
                <div class="relative bg-slate-900 border border-slate-800 p-6 rounded-3xl shadow-2xl font-mono">
                    <div class="flex gap-2 mb-6">
                        <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
                    </div>

                    <pre class="text-sm sm:text-base leading-relaxed overflow-x-auto custom-scrollbar">
                <code class="block text-left">
                <span class="text-pink-500">class</span> <span class="text-blue-400">DiegoPutra</span>
                {
                    <span class="text-gray-500">// Front-End Enthusiast</span>
                    <span class="text-blue-400">public</span> <span class="text-yellow-400">$skills</span> = [
                        <span class="text-green-400">'Laravel'</span>,
                        <span class="text-green-400">'ReactJS'</span>,
                        <span class="text-green-400">'Tailwind'</span>
                    ];

                    <span class="text-blue-400">public</span> <span class="text-yellow-400">$education</span> = <span class="text-green-400">'S.Kom Informatika UISI'</span>;
                }
                </code>
                    </pre>
                </div>

                <style>
                    /* Tambahan agar scrollbar di dalam box kode terlihat rapi di mobile */
                    .custom-scrollbar::-webkit-scrollbar {
                        height: 4px;
                    }

                    .custom-scrollbar::-webkit-scrollbar-track {
                        background: #0f172a;
                    }

                    .custom-scrollbar::-webkit-scrollbar-thumb {
                        background: #334155;
                        border-radius: 10px;
                    }
                </style>
            </div>
        </div>
        </div>
    </header>

    <section id="experience" class="py-20 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12">Pengalaman Terpilih</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="p-8 bg-slate-900/50 border border-slate-800 rounded-3xl">
                    <span class="text-blue-500 text-sm font-bold">2024</span>
                    <h3 class="text-xl font-bold mt-2">SEO Analysis (Internship)</h3>
                    <p class="text-slate-400 mt-2 italic text-sm">Diskominfo Kota Madiun</p>
                    <p class="text-slate-500 mt-4 leading-relaxed">
                        Menganalisis komunikasi publik berbasis media sosial menggunakan teknik SEO untuk meningkatkan
                        jangkauan informasi pemerintah.
                    </p>
                </div>
                <div class="p-8 bg-slate-900/50 border border-slate-800 rounded-3xl">
                    <span class="text-blue-500 text-sm font-bold">2021 - Sekarang</span>
                    <h3 class="text-xl font-bold mt-2">Digital Marketing Staff</h3>
                    <p class="text-slate-400 mt-2 italic text-sm">Gubuk Kamera Gresik</p>
                    <p class="text-slate-500 mt-4 leading-relaxed">
                        Mengembangkan strategi pemasaran dan mengelola konten untuk meningkatkan penjualan alat
                        fotografi dan videografi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white">Proyek Portofolio</h2>
                <p class="text-slate-400 mt-4">Kumpulan karya yang saya bangun selama studi di UISI.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($projects as $project)
                    <div
                        class="bg-slate-800/50 border border-slate-700 p-8 rounded-3xl hover:border-blue-500 transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition">
                                {{ $project->title }}
                            </h3>
                            <svg class="w-6 h-6 text-slate-500 group-hover:text-blue-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">
                            {{ $project->description }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach (explode(',', $project->tech_stack) as $tech)
                                <span
                                    class="px-3 py-1 bg-slate-900 text-blue-400 text-xs font-semibold rounded-lg border border-slate-700">
                                    {{ trim($tech) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 text-center text-white">
            <h2 class="text-3xl font-bold mb-8 italic text-blue-100 italic">"Membangun masa depan melalui baris kode."
            </h2>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach (['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'ReactJS', 'MySQL', 'SEO', 'Figma'] as $skill)
                    <span
                        class="px-6 py-2 bg-white/10 backdrop-blur-md rounded-full font-medium border border-white/20">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-slate-900 text-center">
        <p class="text-slate-600 text-sm">
            &copy; 2025 Helmaesa Diego Putra. Dikembangkan dengan Laravel Breeze & Tailwind CSS.
        </p>
    </footer>

</body>

</html>
