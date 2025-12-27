<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/prince.png') }}">
    <title>@yield('title', 'GO.')</title>

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
        @media (max-width: 768px) {
            #nav-menu {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            #nav-menu::-webkit-scrollbar {
                display: none;
            }

            #nav-menu {
                border: 1px solid var(--border-color);
            }
        }

        :root {
            --bg-color: #f8fafc;
            --text-main: #334155;
            --text-heading: #0f172a;
            --border-color: rgba(0, 0, 0, 0.05);
        }

        html:not(.light) {
            --bg-color: #020617;
            --text-main: #94a3b8;
            --text-heading: #f8fafc;
            --border-color: rgba(255, 255, 255, 0.05);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            transition: background-color 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body::after {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            opacity: 0.2;
            pointer-events: none;
            background-image: url("https://grainy-gradients.vercel.app/noise.svg");
            filter: contrast(120%) brightness(100%);
        }

        .body-orb,
        .orb,
        .bg-visual,
        .blob-bg {
            display: none !important;
        }

        html.light {
            --bg-color: #f8fafc;
            --text-main: #334155;
            --text-heading: #0f172a;
            --border-color: rgba(0, 0, 0, 0.06);
            --glass-bg: rgba(255, 255, 255, 0.85);
            --card-bg: #ffffff;
            --badge-bg: #f1f5f9;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            transition: background-color 0.5s ease;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            opacity: 0.03;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        .body-orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(120px);
            z-index: -2;
            opacity: 0.15;
            animation: floatOrb 20s infinite alternate ease-in-out;
            pointer-events: none;
        }

        .orb-blue {
            width: 600px;
            height: 600px;
            background: #9fc4ff;
            top: -10%;
            left: -5%;
        }

        .orb-purple {
            width: 500px;
            height: 500px;
            background: #8b5cf6;
            bottom: 10%;
            right: -5%;
            animation-delay: -5s;
        }

        @keyframes floatOrb {
            from {
                transform: translate(0, 0) scale(1);
            }

            to {
                transform: translate(50px, 100px) scale(1.1);
            }
        }

        html.light .body-orb {
            opacity: 0.08;
        }

        .glass-effect {
            background: var(--glass-bg) !important;
            backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid var(--border-color);
        }

        html.light .bg-blue-600,
        html.light .bg-blue-500,
        html.light a.bg-blue-600,
        html.light a[href$=".pdf"],
        html.light .download-pdf-btn,
        html.light .bg-blue-600 span,
        html.light .bg-blue-600 i,
        html.light .bg-blue-600 svg {
            color: #ffffff !important;
            fill: #ffffff !important;
            -webkit-text-fill-color: #ffffff !important;
        }

        html.light a.bg-blue-600:hover,
        html.light .download-pdf-btn:hover {
            color: #ffffff !important;
            opacity: 0.9;
        }

        html.light .adaptive-heading,
        html.light h1,
        html.light h2,
        html.light h3,
        html.light h4,
        html.light .text-white:not(.bg-blue-600 *):not(.bg-blue-600) {
            color: var(--text-heading) !important;
        }

        html.light .adaptive-text,
        html.light p:not(.bg-blue-600 *),
        html.light span:not(.text-blue-500):not(.text-blue-600):not(.bg-blue-600 *) {
            color: var(--text-main) !important;
        }

        html.light [class*="bg-slate-800"],
        html.light [class*="bg-slate-900"],
        html.light [class*="bg-slate-950"] {
            background-color: var(--badge-bg) !important;
            color: #475569 !important;
            border: 1px solid rgba(0, 0, 0, 0.04) !important;
        }

        html.light .glass-effect,
        html.light .bg-slate-900,
        html.light .rounded-2xl.bg-slate-950 {
            background-color: var(--card-bg) !important;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.03) !important;
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

        footer {
            position: relative;
            padding-top: 4rem;
            padding-bottom: 3rem;
            margin-top: 5rem;
            background: transparent;
        }

        footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            height: 1px;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(59, 130, 246, 0.5),
                    rgba(139, 92, 246, 0.5),
                    transparent);
        }

        footer::after {
            content: "";
            position: absolute;
            top: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            filter: blur(4px);
            opacity: 0.6;
        }

        html.light footer::before {
            background: linear-gradient(90deg,
                    transparent,
                    rgba(0, 0, 0, 0.1),
                    rgba(0, 0, 0, 0.1),
                    transparent);
        }

        html.light footer::after {
            background: #3b82f6;
            opacity: 0.3;
        }

        body {
            background-color: var(--bg-color);
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -1;
            background: radial-gradient(circle at 0% 0%, rgba(59, 130, 246, 0.03) 0, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 92, 246, 0.03) 0, transparent 50%);
            pointer-events: none;
        }

        .modern-footer {
            position: relative;
            margin-top: 10rem;
            padding-bottom: 3rem;
            background: transparent;
        }

        .footer-divider {
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg,
                    transparent 0%,
                    var(--border-color) 20%,
                    var(--border-color) 80%,
                    transparent 100%);
            margin-bottom: 4rem;
            position: relative;
        }

        .footer-divider::after {
            content: "";
            position: absolute;
            top: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            filter: blur(2px);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 4rem;
        }

        .footer-brand h2 {
            font-size: 2.5rem;
            font-weight: 900;
            letter-spacing: -2px;
            margin-bottom: 1.5rem;
            background: linear-gradient(to bottom right, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        html.light .footer-brand h2 {
            background: linear-gradient(to bottom right, #0f172a, #475569);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .footer-label {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: #3b82f6;
            margin-bottom: 1.5rem;
            display: block;
        }

        .footer-link {
            display: block;
            font-size: 1.1rem;
            color: var(--text-main);
            margin-bottom: 0.75rem;
            transition: all 0.3s ease;
            width: fit-content;
        }

        .footer-link:hover {
            color: #3b82f6;
            transform: translateX(8px);
        }

        .footer-copyright {
            margin-top: 6rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .footer-brand h2 {
                font-size: 2rem;
            }
        }

        .footer-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            border-radius: 1.5rem;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .footer-card:hover {
            border-color: rgba(59, 130, 246, 0.3);
            transform: translateY(-5px);
        }
    </style>

</head>

<body class="dynamic-bg overflow-x-hidden">

    <div class="overflow-x-hidden antialiased">
        <div id="top-progress"></div>
        <div id="transition-overlay"></div>

        <div class="fixed inset-0 z-[-1] pointer-events-none">
            <div class="absolute inset-0 bg-[var(--bg-color)] transition-colors duration-700"></div>
            <div class="absolute inset-0 opacity-40 dark:opacity-20"
                style="background: radial-gradient(circle at 0% 0%, #3b82f6 0%, transparent 40%),
                             radial-gradient(circle at 100% 100%, #3b82f6 0%, transparent 40%); filter: blur(80px);">
            </div>
        </div>

        <header class="fixed w-full top-0 z-50 px-4 md:px-6 py-4 md:py-6">
            <nav
                class="max-w-6xl mx-auto glass-effect rounded-2xl px-3 md:px-8 h-20 flex justify-between items-center shadow-2xl relative">

                <a href="{{ route('home') }}"
                    class="page-transition-link flex items-center gap-0.5 group z-50 relative">
                    <div
                        class="group-hover:rotate-12 transition-transform duration-500 flex items-center justify-center">
                        <img src="images/mahkota.png" alt="Icon" class="w-20 h-20 object-contain">
                    </div>
                    <span class="font-black text-xl tracking-tighter uppercase italic text-white ml-[-10px]">
                        GO<span class="text-blue-500">.</span>
                    </span>
                </a>

                <div id="nav-menu"
                    class="hidden md:flex flex-col md:flex-row absolute md:relative top-24 md:top-0 left-0 w-full md:w-auto bg-slate-900/90 md:bg-slate-500/10 backdrop-blur-xl md:backdrop-blur-none p-4 md:p-1.5 rounded-2xl md:rounded-xl border border-white/10 mx-0 md:mx-2 z-40 transition-all duration-300 shadow-xl md:shadow-none">
                    @php
                        $navItems = [
                            ['route' => 'home', 'label' => 'Home'],
                            ['route' => 'about', 'label' => 'About'],
                            ['route' => 'experience', 'label' => 'Experience'],
                            ['route' => 'projects.index', 'label' => 'Projects'],
                            ['route' => 'contact', 'label' => 'Contact'],
                        ];
                    @endphp
                    @foreach ($navItems as $item)
                        <a href="{{ route($item['route']) }}"
                            class="page-transition-link px-4 py-3 md:py-2 rounded-lg text-sm font-bold transition-all whitespace-nowrap text-white {{ request()->routeIs($item['route']) ? 'nav-item-active bg-blue-600/20 md:bg-blue-600/10' : 'hover:text-blue-400' }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>

                <div class="flex items-center gap-2 md:gap-4 shrink-0 z-50">
                    <button id="theme-toggle"
                        class="p-2.5 rounded-xl glass-effect hover:scale-110 active:scale-95 transition-all text-white">
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
                        class="page-transition-link hidden lg:block px-6 py-2.5 bg-blue-600 text-white rounded-xl font-bold shadow-lg shadow-blue-600/20 hover:bg-blue-700 active:scale-95 transition-all">
                        Contact
                    </a>

                    <button id="mobile-menu-button" class="md:hidden p-2.5 rounded-xl glass-effect text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
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
                            <div
                                class="group-hover:rotate-12 transition-transform duration-500 flex items-center justify-center">
                                <img src="images/mahkota.png" alt="Icon" class="w-20 h-20 object-contain">
                            </div>
                            <span class="font-black text-xl tracking-tighter uppercase italic text-white ml-[-10px]">
                                GO<span class="text-blue-500">.</span>
                            </span>
                        </div>
                        <p class="text-white text-sm leading-relaxed max-w-sm">
                            Building meaningful digital experiences through precise code and intuitive design.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <h4 class="text-white font-bold uppercase tracking-widest text-xs">Navigation</h4>
                        <ul class="space-y-4 text-sm font-medium">
                            <li>
                                <a href="{{ route('projects.index') }}"
                                    class="page-transition-link text-white hover:text-blue-500 transition">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"
                                    class="page-transition-link text-white hover:text-blue-500 transition">
                                    About Me
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="space-y-6">
                        <h4 class="text-white font-bold uppercase tracking-widest text-xs">Connect</h4>
                        <ul class="space-y-4 text-sm font-medium">
                            <li>
                                <a href="https://wa.me/6287823928494" target="_blank"
                                    class="text-white hover:text-[#25D366] transition">
                                    WhatsApp
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white hover:text-blue-400 transition">
                                    LinkedIn
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-black/5 dark:border-white/5 gap-4">
                    <p class="text-white text-xs font-mono">&copy; 2025 PRINCEIGO. Built with Laravel & Tailwind.</p>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                        <span class="text-white text-[10px] font-bold uppercase tracking-widest">
                            Available for Freelance
                        </span>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

        <script>
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const navMenu = document.getElementById('nav-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuButton.addEventListener('click', () => {
                navMenu.classList.toggle('hidden');
                navMenu.classList.toggle('flex');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!navMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                    navMenu.classList.add('hidden');
                    navMenu.classList.remove('flex');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
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
    </div>
</body>

</html>
