@extends('layouts.portfolio')

@section('title', 'Home')

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-20 lg:py-32 flex flex-col lg:flex-row items-center justify-between">
        <div class="lg:w-2/3 text-center lg:text-left">
            <span class="text-blue-500 font-mono tracking-widest uppercase text-sm mb-4 block">Tersedia untuk kerja/Proyek
                Freelance</span>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-white mb-6 leading-tight">
                Halo, Saya <br> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400 text-blue-500">Helmaesa
                    Diego
                    Putra</span>
            </h1>
            <p class="text-slate-400 text-lg mb-10 max-w-xl mx-auto lg:mx-0">
                Lulusan Informatika UISI yang berdedikasi membangun aplikasi web interaktif menggunakan Laravel dan ReactJS.
                Saya juga berpengalaman dalam strategi Digital Marketing dan Search Engine Optimation (SEO)
            </p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                <a href="/assets/cv_igo.pdf" download="cv_igo.pdf"
                    class="group inline-flex items-center justify-center gap-3 px-10 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold transition-all duration-300 shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40 hover:-translate-y-1 active:scale-95 w-full sm:w-auto">

                    <svg class="w-5 h-5 group-hover:animate-bounce transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>

                    <span class="tracking-wide">Download CV</span>
                </a>
            </div>
        </div>

        <div class="hidden lg:block lg:w-1/3">
            <div class="bg-slate-900 border border-slate-800 p-6 rounded-3xl font-mono shadow-2xl">
                <pre class="text-sm leading-relaxed"><code class="text-left block text-blue-300">
<span class="text-pink-500">class</span> <span class="text-yellow-400">Princeigo</span> {
  <span class="text-blue-500">public</span> <span class="text-emerald-400">$role</span> = <span class="text-orange-400">'Front-End Dev'</span>;
  <span class="text-blue-500">public</span> <span class="text-emerald-400">$location</span> = <span class="text-orange-400">'Jepara, ID'</span>;

  <span class="text-blue-500">public function</span> <span class="text-yellow-400">getSkills</span>() {
    <span class="text-pink-500">return</span> [<span class="text-orange-400">'Laravel'</span>, <span class="text-orange-400">'React'</span>, <span class="text-orange-400">'Tailwind'</span>];
  }
}</code></pre>
            </div>
        </div>
    </div>
@endsection
