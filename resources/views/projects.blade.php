@extends('layouts.portfolio')

@section('title', 'Prince.Igo | Projects')

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-white mb-4">My <span class="text-blue-500">Projects</span></h1>
            <p class="text-slate-400 max-w-2xl mx-auto italic">Detailed explanation of the technical roles and solutions I
                provided for each project.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-10">
            @foreach ($projects as $project)
                <div
                    class="bg-slate-900 border border-slate-800 rounded-3xl overflow-hidden flex flex-col hover:border-blue-500/50 transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative bg-slate-800">
                        <img src="/images/{{ $project['image'] }}" alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100"
                            onerror="this.src='https://via.placeholder.com/800x450/0f172a/3b82f6?text=Empty+Image'">
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-blue-600 text-white text-[10px] font-bold uppercase rounded-md shadow-lg italic">Verified
                                Project</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-blue-500 transition">
                            {{ $project['title'] }}
                        </h3>
                        <p class="text-blue-400 font-medium text-sm mb-4 italic">{{ $project['description'] }}</p>

                        <div class="border-t border-slate-800 pt-4 mb-6">
                            <h4 class="text-slate-300 text-xs font-bold uppercase tracking-widest mb-2">Job Details:
                            </h4>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                {{ $project['details'] }}
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-2 mt-auto">
                            @foreach ($project['tech'] as $tech)
                                <span
                                    class="px-3 py-1 bg-slate-800 text-slate-300 text-[10px] font-mono rounded-lg border border-slate-700">
                                    #{{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
