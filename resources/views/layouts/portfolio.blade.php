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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'light' || (!savedTheme && window.matchMedia('(prefers-color-scheme: light)').matches)) {
                document.documentElement.classList.add('light');
            } else {
                document.documentElement.classList.remove('light');
            }
        })();
    </script>

    <style>
        /* 1. CSS Variables Dasar (Dark Mode Tetap) */
        :root {
            --bg-color: #020617;
            --text-main: #cbd5e1;
            --text-heading: #ffffff;
            --border-color: rgba(255, 255, 255, 0.08);
            --glass-bg: rgba(15, 23, 42, 0.7);
            --card-bg: #0f172a;
            --badge-bg: #1e293b;
        }

        /* 2. LIGHT MODE - Profesional Gradient Reset */
        html.light {
            /* Latar belakang putih dengan gradasi ke biru pucat yang sangat lembut */
            --bg-color: #ffffff;
            --bg-gradient: radial-gradient(at 0% 0%, rgba(240, 247, 255, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, rgba(245, 243, 255, 1) 0, transparent 50%);

            --text-main: #334155;
            --text-heading: #0f172a;
            /* Navy sangat gelap agar mewah */
            --border-color: rgba(0, 0, 0, 0.06);
            --glass-bg: rgba(255, 255, 255, 0.85);
            --card-bg: #ffffff;
            --badge-bg: #f1f5f9;
        }

        /* 3. Global Styles & Background Force */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            transition: background-color 0.5s ease, color 0.5s ease;
            opacity: 0;
            min-height: 100vh;
        }

        /* Memberikan efek gradasi hanya pada light mode tanpa merusak dark mode */
        html.light body {
            background-image: var(--bg-gradient);
            background-attachment: fixed;
        }

        /* 4. Perbaikan Visual Portfolio (Light Mode) */
        html.light .adaptive-heading,
        html.light h1,
        html.light h2,
        html.light h3,
        html.light h4,
        html.light .text-white,
        html.light .text-slate-100,
        html.light .text-slate-200 {
            color: var(--text-heading) !important;
        }

        html.light .adaptive-text,
        html.light p,
        html.light span:not(.text-blue-500):not(.text-blue-600),
        html.light .text-slate-400,
        html.light .text-slate-500 {
            color: var(--text-main) !important;
            opacity: 1 !important;
        }

        /* Badge & Card Refinement */
        html.light [class*="bg-slate-800"],
        html.light [class*="bg-slate-900"],
        html.light [class*="bg-slate-950"],
        html.light .bg-slate-900\/50 {
            background-color: var(--badge-bg) !important;
            color: #475569 !important;
            border: 1px solid rgba(0, 0, 0, 0.04) !important;
            font-weight: 600;
        }

        html.light .glass-effect,
        html.light .bg-slate-900,
        html.light .rounded-2xl.bg-slate-950 {
            background-color: var(--card-bg) !important;
            border: 1px solid var(--border-color) !important;
            /* Shadow yang lebih dalam dan halus */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.03), 0 8px 10px -6px rgba(0, 0, 0, 0.03) !important;
        }

        /* 5. Elemen Dekoratif & Navigasi */
        .blob-bg {
            opacity: 0.3;
            filter: blur(120px);
            transition: opacity 0.5s ease;
        }

        html.light .blob-bg {
            opacity: 0.2;
        }

        .nav-item-active {
            color: #3b82f6 !important;
            position: relative;
        }

        .nav-item-active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 2px;
            background: #3b82f6;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(59, 130, 246, 0.4);
        }

        #top-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #2dd4bf);
            z-index: 9999;
        }

        /* FORCE WHITE TEXT FOR DOWNLOAD BUTTONS IN LIGHT MODE */
        /* Target: class khusus, link dengan background biru, link download, dan link file pdf */
        html.light .download-pdf-btn,
        html.light a.bg-blue-600,
        html.light a[class*="bg-blue-"],
        html.light a[href*="download"],
        html.light a[href$=".pdf"] {
            color: #ffffff !important;
            /* Paksa teks jadi putih murni */
            -webkit-text-fill-color: #ffffff !important;
            /* Untuk browser berbasis webkit */
        }

        /* Memastikan teks tetap putih saat di-hover atau aktif */
        html.light a.bg-blue-600:hover,
        html.light a[href$=".pdf"]:hover,
        html.light a[href$=".pdf"]:focus {
            color: #ffffff !important;
            opacity: 0.9;
        }

        /* Memastikan icon di dalam tombol download juga berwarna putih */
        html.light a.bg-blue-600 svg,
        html.light a[href$=".pdf"] svg,
        html.light a.bg-blue-600 i,
        html.light a[href$=".pdf"] i {
            color: #ffffff !important;
            fill: #ffffff !important;
        }
    </style>

</head>

<body class="dynamic-bg overflow-x-hidden">

    <div id="top-progress"></div>
    <div id="transition-overlay"></div>

    <div class="fixed inset-0 z-[-1] overflow-hidden dynamic-bg">
        <div class="absolute inset-0 transition-opacity duration-500"
            style="background: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.05), transparent);"></div>

        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-blue-600 rounded-full blob-bg"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-indigo-600 rounded-full blob-bg"></div>
    </div>

    <header class="fixed w-full top-0 z-50 px-4 md:px-6 py-4 md:py-6">
        <nav
            class="max-w-6xl mx-auto glass-effect rounded-2xl px-3 md:px-8 h-20 flex justify-between items-center shadow-2xl">

            <a href="{{ route('home') }}" class="page-transition-link flex items-center gap-2 group">
                <div
                    class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500">
                    <span class="text-white font-black text-xl">I</span>
                </div>
                <span class="font-black text-xl tracking-tighter uppercase italic adaptive-heading">
                    GO<span class="text-blue-500">.</span>
                </span>
            </a>

            <div
                class="flex items-center bg-slate-500/10 dark:bg-slate-500/10 p-1.5 rounded-xl border border-black/5 dark:border-white/5 mx-2 overflow-x-auto no-scrollbar">
                @php
                    $navItems = [
                        ['route' => 'home', 'label' => 'Home'],
                        ['route' => 'about', 'label' => 'About'],
                        ['route' => 'experience', 'label' => 'Exp'],
                        ['route' => 'projects.index', 'label' => 'Portfolio'],
                        ['route' => 'contact', 'label' => 'Contact'],
                    ];
                @endphp
                @foreach ($navItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="page-transition-link px-4 py-2 rounded-lg text-sm font-bold transition-all whitespace-nowrap {{ request()->routeIs($item['route']) ? 'nav-item-active' : 'adaptive-text hover:text-blue-500' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="flex items-center gap-2 md:gap-4 shrink-0">
                <button id="theme-toggle"
                    class="p-2.5 rounded-xl glass-effect hover:scale-110 active:scale-95 transition-all adaptive-heading">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-yellow-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('contact') }}"
                    class="page-transition-link hidden md:block px-6 py-2.5 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-600/20 hover:bg-blue-700 active:scale-95 transition-all">
                    Contact
                </a>
            </div>
        </nav>
    </header>

    <main id="main-content" class="relative pt-32 min-h-screen">
        @yield('content')
    </main>

    <footer class="relative mt-20 pt-20 pb-10 border-t border-black/5 dark:border-white/5 dynamic-bg">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2 space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-black text-sm">I</span>
                        </div>
                        <span class="adaptive-heading font-black text-2xl tracking-tighter uppercase italic">GO<span
                                class="text-blue-500">.</span></span>
                    </div>
                    <p class="adaptive-text text-sm leading-relaxed max-w-sm">
                        Membangun pengalaman digital yang bermakna melalui kode yang presisi dan desain yang intuitif.
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="adaptive-heading font-bold uppercase tracking-widest text-xs">Navigation</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="{{ route('projects.index') }}"
                                class="page-transition-link adaptive-text hover:text-blue-500 transition">Portfolio</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                class="page-transition-link adaptive-text hover:text-blue-500 transition">About Me</a>
                        </li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h4 class="adaptive-heading font-bold uppercase tracking-widest text-xs">Connect</h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="https://wa.me/6287823928494" target="_blank"
                                class="adaptive-text hover:text-[#25D366] transition">WhatsApp</a></li>
                        <li><a href="#" class="adaptive-text hover:text-blue-400 transition">LinkedIn</a></li>
                    </ul>
                </div>
            </div>

            <div
                class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-black/5 dark:border-white/5 gap-4">
                <p class="adaptive-text text-xs font-mono opacity-50">&copy; 2025 PRINCEIGO. Built with Laravel &
                    Tailwind.</p>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                    <span class="adaptive-text text-[10px] font-bold uppercase tracking-widest opacity-70">Available for
                        Freelance</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 50
        });

        window.addEventListener('load', () => {
            const tl = gsap.timeline();
            tl.to("body", {
                    opacity: 1,
                    duration: 0.6
                })
                .from("#main-content", {
                    opacity: 0,
                    y: 40,
                    filter: "blur(10px)",
                    duration: 1,
                    ease: "expo.out"
                }, "-=0.2");
        });

        document.querySelectorAll('.page-transition-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.hostname !== window.location.hostname || e.metaKey || e.ctrlKey || e.shiftKey)
                    return;
                e.preventDefault();
                const url = this.href;
                gsap.to("#top-progress", {
                    width: "100%",
                    duration: 0.8,
                    ease: "power4.inOut"
                });
                gsap.to("#transition-overlay", {
                    opacity: 1,
                    duration: 0.5
                });
                gsap.to("#main-content", {
                    opacity: 0,
                    scale: 0.98,
                    filter: "blur(10px)",
                    duration: 0.6,
                    ease: "expo.inOut",
                    onComplete: () => {
                        window.location.href = url;
                    }
                });
            });
        });

        const themeToggleBtn = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        function updateThemeUI() {
            if (document.documentElement.classList.contains('light')) {
                darkIcon.classList.remove('hidden');
                lightIcon.classList.add('hidden');
            } else {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            }
        }

        updateThemeUI();

        themeToggleBtn.addEventListener('click', () => {
            document.documentElement.classList.toggle('light');
            const isLight = document.documentElement.classList.contains('light');
            localStorage.setItem('theme', isLight ? 'light' : 'dark');
            updateThemeUI();
            gsap.fromTo(themeToggleBtn, {
                scale: 0.8
            }, {
                scale: 1,
                duration: 0.4,
                ease: "back.out"
            });
        });
    </script>
</body>

</html>
