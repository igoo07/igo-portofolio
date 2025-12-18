<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Helmaesa Diego Putra')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <script>
        // Inisialisasi tema sebelum halaman dirender
        if (localStorage.getItem('theme') === 'light' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: light)').matches)) {
            document.documentElement.classList.add('light');
        } else {
            document.documentElement.classList.remove('light');
        }
    </script>

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* TRANSISI WARNA HALUS */
        body {
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        /* NUANSA LIGHT MODE (TERANG) */
        html.light body {
            background-color: #f1f5f9;
            /* Slate 100 */
            color: #1e293b;
            /* Slate 800 */
        }

        /* Navbar & Footer di Light Mode */
        html.light .glass-effect {
            background: rgba(255, 255, 255, 0.7) !important;
            border-color: rgba(0, 0, 0, 0.05) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05) !important;
        }

        html.light footer {
            background-color: #ffffff !important;
            border-top-color: rgba(0, 0, 0, 0.05) !important;
        }

        /* Penyesuaian Teks & Elemen di Light Mode */
        html.light .text-white {
            color: #0f172a !important;
        }

        html.light .text-slate-300,
        html.light .text-slate-400,
        html.light .text-slate-500 {
            color: #475569 !important;
        }

        html.light .bg-slate-900\/50 {
            background-color: rgba(0, 0, 0, 0.03) !important;
        }

        /* Nav Item Non-Aktif di Light Mode */
        html.light a.text-slate-400:not(.bg-blue-600) {
            color: #64748b !important;
        }

        html.light a.text-slate-400:hover {
            color: #2563eb !important;
            background-color: rgba(37, 99, 235, 0.05);
        }
    </style>
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Dark Theme Base */
        .bg-main {
            background: #020617;
        }

        /* Glassmorphism Effect */
        .glass-effect {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Light Mode Overrides */
        .light .bg-main {
            background: #f8fafc;
        }

        .light .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
        }

        .light .text-white {
            color: #0f172a !important;
        }

        .light .text-slate-500 {
            color: #64748b !important;
        }

        @keyframes float-bg {
            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(2%, 2%);
            }

            100% {
                transform: translate(0, 0);
            }
        }

        .animate-subtle {
            animation: float-bg 10s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-main text-slate-300 selection:bg-blue-500/30 overflow-x-hidden">

    <div class="fixed inset-0 z-[-1] overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(17,24,39,1),rgba(2,6,23,1))]"></div>
        <div class="animate-subtle absolute top-0 left-0 w-full h-full opacity-30">
            <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-blue-600/20 blur-[120px] rounded-full"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-indigo-600/10 blur-[120px] rounded-full">
            </div>
        </div>
    </div>

    <header class="fixed w-full top-0 z-50 px-4 md:px-6 py-4 md:py-6">
        <nav
            class="max-w-6xl mx-auto glass-effect rounded-2xl px-3 md:px-8 h-20 flex justify-between items-center shadow-2xl">

            <a href="{{ route('home') }}" class="flex items-center gap-2 group shrink-0">
                <div
                    class="w-8 h-8 md:w-10 md:h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-600/30 group-hover:rotate-12 transition-transform">
                    <span class="text-white font-black text-lg md:text-xl">I</span>
                </div>
                <span class="font-black text-lg md:text-xl tracking-tighter text-white uppercase italic">GO<span
                        class="text-blue-500">.</span></span>
            </a>

            <div
                class="flex items-center bg-slate-900/50 p-1 md:p-1.5 rounded-xl border border-white/5 mx-2 overflow-x-auto no-scrollbar">
                @php
                    $navItems = [
                        ['route' => 'home', 'label' => 'Home'],
                        ['route' => 'about', 'label' => 'About'],
                        ['route' => 'experience', 'label' => 'Exp'], // Diperpendek untuk mobile
                        ['route' => 'projects.index', 'label' => 'Work'], // Diperpendek untuk mobile
                    ];
                @endphp
                @foreach ($navItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="px-3 md:px-5 py-2 md:py-2.5 rounded-lg text-[11px] md:text-[13px] font-bold tracking-wide transition-all whitespace-nowrap {{ request()->routeIs($item['route']) ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'text-slate-400 hover:text-white' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="flex items-center gap-2 md:gap-4 shrink-0">
                <button id="theme-toggle"
                    class="p-2 md:p-2.5 rounded-xl bg-slate-800/50 border border-white/10 transition-all active:scale-90">
                    <svg id="theme-toggle-dark-icon" class="hidden w-4 h-4 md:w-5 md:h-5 text-slate-700"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-4 h-4 md:w-5 md:h-5 text-yellow-400"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('contact') }}"
                    class="hidden md:block px-6 py-3 bg-white text-black hover:bg-blue-600 hover:text-white rounded-xl text-sm font-black transition-all shadow-xl active:scale-95">
                    Contact
                </a>
            </div>
        </nav>
    </header>

    <main class="relative pt-32 min-h-screen">
        @yield('content')
    </main>

    <footer class="relative mt-20 pt-20 pb-10 border-t border-white/5 bg-[#01040a]">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2 space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-black text-sm">I</span>
                        </div>
                        <span class="text-white font-black text-2xl tracking-tighter uppercase italic">GO<span
                                class="text-blue-500">.</span></span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                        Membangun pengalaman digital yang bermakna melalui kode yang presisi dan desain yang intuitif.
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-white font-bold uppercase tracking-widest text-xs">Navigation</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li><a href="#" class="hover:text-blue-500 transition">Works</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition">About Me</a></li>
                        <li><a href="#" class="hover:text-blue-500 transition">Services</a></li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h4 class="text-white font-bold uppercase tracking-widest text-xs">Connect</h4>
                    <ul class="space-y-4 text-sm text-slate-500 font-medium">
                        <li><a href="https://wa.me/6287823928494" class="hover:text-[#25D366] transition">WhatsApp</a>
                        </li>
                        <li><a href="#" class="hover:text-blue-400 transition">LinkedIn</a></li>
                        <li><a href="#" class="hover:text-white transition">GitHub</a></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-white/5 gap-4">
                <p class="text-slate-600 text-xs font-mono">
                    &copy; 2025 PRINCEIGO. Built with Laravel & Tailwind.
                </p>
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                        <span class="text-slate-500 text-[10px] font-bold uppercase tracking-widest">Available for
                            Freelance</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        // Fungsi Update Ikon
        function updateIcons() {
            if (document.documentElement.classList.contains('light')) {
                darkIcon.classList.remove('hidden');
                lightIcon.classList.add('hidden');
            } else {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            }
        }

        updateIcons();

        themeToggleBtn.addEventListener('click', () => {
            // Toggle Class 'light' di tag <html>
            document.documentElement.classList.toggle('light');

            // Simpan preferensi ke LocalStorage
            if (document.documentElement.classList.contains('light')) {
                localStorage.setItem('theme', 'light');
            } else {
                localStorage.setItem('theme', 'dark');
            }

            updateIcons();
        });
    </script>
</body>

</html>
