<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'TrainLokal')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen flex-col bg-[#0b2d58] font-sans text-white antialiased">
    <nav class="relative z-[9999] isolate w-full overflow-visible bg-[#17295a]" style="position: relative; z-index: 99999; overflow: visible;">
        <div class="mx-auto flex max-w-[1400px] items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            
            <!-- Left Side: Logo -->
            <div class="flex items-center gap-3">
                <img
                    src="{{ asset('/images/tesda.png') }}"
                    alt="CLGEO logo"
                    class="h-9 w-9 rounded-full object-cover shadow-inner ring-2 ring-blue-200/60"
                >
                <div>
                    <div class="text-xl font-bold tracking-wide text-white">CLGEO</div>
                    <div class="text-[11px] uppercase tracking-[0.04em] text-blue-100/80">Community and Local Government Engagement Office</div>
                </div>
            </div>

            <!-- Right Side: Navigation Links -->
            <div class="hidden items-center gap-8 text-sm font-semibold text-blue-100/90 lg:flex">
                
                <!-- TrainLOKAL Wrapper with Floating Badge -->
                <div class="relative z-[9999] inline-block">
                    <span class="transition hover:text-yellow-300 cursor-pointer">TrainLOKAL</span>
                    
                    <!-- Floating Launching Badge -->
                    <div class="pointer-events-none absolute left-0 top-full z-[9999] mt-2 animate-float whitespace-nowrap rounded-[0.35rem] bg-[#ffd02f] px-3 py-1.5 text-[10px] font-black uppercase tracking-[0.08em] text-[#17295a] shadow-[0_8px_16px_rgba(255,208,47,0.34)]" style="position: absolute; top: calc(100% + 0.5rem); left: 0; z-index: 100000; animation: float 3s ease-in-out infinite;">
                        <!-- Speech bubble arrow pointing UP -->
                        <div class="absolute -top-1 left-4 h-2 w-2 rotate-45 bg-[#ffd02f]"></div>
                        Launching
                    </div>
                </div>

                <a href="{{ route('home') }}" class="transition hover:text-yellow-300">Analytics</a>
                <a href="{{ route('routes') }}" class="transition hover:text-yellow-300">Profiling</a>
                <a href="{{ route('bookings') }}" class="transition hover:text-yellow-300">News</a>
                <a href="{{ route('offers') }}" class="transition hover:text-yellow-300">Activities</a>
                <a href="{{ route('support') }}" class="transition hover:text-yellow-300">Directory</a>
            </div>
        </div>

        <!-- Gradient Glow Shadow (Behind Navbar) -->
        <div class="pointer-events-none absolute inset-x-0 top-full h-24 bg-gradient-to-b from-[#5e7ca8]/50 via-[#5e7ca8]/15 to-transparent -z-10"></div>
    </nav>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-[#142451]">
        <div class="mx-auto flex max-w-[1400px] flex-col items-start gap-5 px-4 py-6 text-sm text-white sm:px-6 lg:grid lg:grid-cols-[1fr_auto] lg:items-center lg:px-8">
            <div class="flex items-center gap-2 whitespace-nowrap">
                <span>©</span>
                <span>2026 CLGEO. All rights reserved.</span>
            </div>

            <div class="flex flex-wrap gap-4 lg:col-start-2 lg:row-span-2 lg:justify-end">
                <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/5 p-3">
                    <img src="{{ asset('images/brochure_QR.png') }}" alt="QR code for Advocacy materials" class="h-16 w-16 rounded bg-white p-1 object-contain">
                    <span class="max-w-32 font-semibold text-white">Advocacy materials</span>
                </div>
                <div class="flex items-center gap-3 rounded-xl border border-white/10 bg-white/5 p-3">
                    <img src="{{ asset('images/PLAYBOOK_QR.png') }}" alt="QR code for LGU Led skills Playbook" class="h-16 w-16 rounded bg-white p-1 object-contain">
                    <span class="max-w-32 font-semibold text-white">LGU Led skills Playbook</span>
                </div>
            </div>

            <div class="text-left text-white/90 lg:col-start-1 lg:row-start-2">
                Technical Education and Skills Development Authority
            </div>
        </div>
    </footer>
</body>

</html>
