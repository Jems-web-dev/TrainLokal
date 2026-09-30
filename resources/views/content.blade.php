@extends('layouts.app')

@section('title', 'TrainLokal | Home')

@section('content')
@php
$videos = [
[
'src' => asset('videos/LGU_Solana.mp4'),
'label' => 'Region II',
'title' => 'Solana',
'status' => '',
],
[
'src' => asset('videos/Tarlac_AVP.mp4'),
'label' => 'Region III',
'title' => 'Tarlac',
'status' => 'Skills in Action',
],
[
'src' => asset('videos/Tagum_AVP.mp4'),
'label' => 'Region X',
'title' => 'Tagum City',
'status' => 'Youth Readiness',
],
[
'src' => asset('videos/Negros_Occidental_AVP.mp4'),
'label' => 'NIR',
'title' => 'Negros Occidental',
'status' => 'Career Pathways',
],
[
'src' => asset('videos/TANAY_AVP.mp4'),
'label' => 'Region IV-A',
'title' => 'Tanay',
'status' => 'Sustained Growth',
],
];
@endphp
<section class="landing-event-hero relative flex min-h-[calc(100svh-5rem)] items-center justify-center overflow-hidden bg-cover bg-center px-4 py-12 sm:px-6 lg:px-8" style="background-image: linear-gradient(90deg, rgba(39, 91, 160, .82), rgba(31, 57, 120, .78)), url('{{ asset('images/central.png') }}');">
    <div class="landing-event-layout" data-event-layout>
    <div class="landing-event-content relative mx-auto w-full max-w-[1100px] text-center">
        <p class="landing-event-badge"><span aria-hidden="true"></span>Coming this November</p>
        <p class="landing-event-kicker"><span></span>National Launching<span></span></p>
        <p class="landing-event-of">of</p>
        <h1 class="landing-event-title font-display">TrainLO<span>K</span>AL</h1>
        <p class="landing-event-subtitle">From Volume to Value: Empowering LGUs to Drive Skills, Jobs, and Local Growth</p>
        <p class="landing-event-date">November 19, 2026 <span aria-hidden="true">·</span> 7:00 AM–4:00 PM <span aria-hidden="true">·</span> GMT+8</p>

        <div class="landing-countdown" data-countdown-target="2026-11-19T07:00:00+08:00" aria-label="Countdown to November 19, 2026 at 7 AM Philippine time">
            <div class="landing-countdown-tile"><span data-countdown-days>000</span><small>Days</small></div>
            <div class="landing-countdown-tile"><span data-countdown-hours>00</span><small>Hours</small></div>
            <div class="landing-countdown-tile"><span data-countdown-minutes>00</span><small>Minutes</small></div>
            <div class="landing-countdown-tile"><span data-countdown-seconds>00</span><small>Seconds</small></div>
        </div>

        <div class="landing-event-actions">
            <button type="button" disabled aria-label="Registration button, registration link coming soon" title="Registration link coming soon" class="landing-event-register">Register Now <span aria-hidden="true">&#8594;</span></button>
            <button type="button" class="landing-event-details" data-toggle-launching-details aria-expanded="false" aria-controls="launching-details-panel">Launching details <span aria-hidden="true">&#8250;</span></button>
        </div>
    </div>

        <aside class="landing-event-details-panel" id="launching-details-panel" aria-label="Launching venue details" hidden>
            <div class="landing-hero-map">
                <iframe
                    class="landing-hero-map-frame"
                    src="https://maps.google.com/maps?q=Diwa%20Ng%20Tarlac%2C%209%20Romulo%20Blvd%2C%20Tarlac%20City%2C%202300&z=16&output=embed"
                    title="Map showing Diwa Ng Tarlac in Tarlac City"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen></iframe>
                <div class="flex items-center justify-between gap-4 px-5 py-4 text-left sm:px-6">
                    <div>
                        <h2 class="font-bold text-white">Diwa ng Tarlac</h2>
                        <p class="mt-1 text-xs leading-5 text-blue-100/80 sm:text-sm">9 Romulo Blvd, Tarlac City, 2300</p>
                    </div>
                    <a href="https://www.google.com/maps/search/?api=1&amp;query=Diwa+Ng+Tarlac%2C+9+Romulo+Blvd%2C+Tarlac+City%2C+2300" target="_blank" rel="noopener noreferrer" class="shrink-0 rounded-lg border border-white/25 px-4 py-2 text-xs font-bold text-white transition hover:border-[#ffd02f] hover:text-[#ffd02f] sm:text-sm">
                        View map
                    </a>
                </div>
            </div>
        </aside>
    </div>
</section>

<section id="train-lokal-overview" class="lokal-overview-section">
    <div class="lokal-overview-layout">
        <div class="lokal-overview-copy">
            <p class="lokal-overview-circular"><span aria-hidden="true"></span> TESDA Circular No. 024, S. 2026</p>
            <p class="lokal-overview-eyebrow">Train Lokal</p>
            <h2>Local skills, led locally.</h2>
            <p class="lokal-overview-description">Localized Opportunities for Knowledge Access and Lifelong Learning helps local governments lead skills training that reflects the jobs, industries, and opportunities in their own communities.</p>
            <div class="lokal-overview-actions">
                <a href="#how-it-works" class="lokal-overview-primary">See how it works <span aria-hidden="true">&#8964;</span></a>
                <button type="button" disabled title="Guidelines link coming soon" class="lokal-overview-secondary">Read the full guidelines <span aria-hidden="true">&#8595;</span></button>
            </div>
        </div>

        <div class="lokal-overview-card" aria-label="Train LOKAL: plan locally, build together, grow sustainably">
            <div class="lokal-overview-card-top">
                <img src="{{ asset('images/tesda.png') }}" alt="TESDA logo">
                <img class="bagong-pilipinas-logo" src="{{ asset('images/bagongpilipinas.png') }}" alt="Bagong Pilipinas logo">
            </div>
            <div class="lokal-overview-card-showcase">
                <img src="{{ asset('images/halflogo.png') }}" alt="TESDA learners and community skills training collage">
                <p class="lokal-overview-card-title">Train<br><strong>LO<span class="lokal-overview-k">K</span>AL</strong></p>
            </div>
            <div class="lokal-overview-principles">
                <div><span>Plan</span><strong>Locally</strong></div>
                <div><span>Build</span><strong>Together</strong></div>
                <div><span>Grow</span><strong>Sustainably</strong></div>
            </div>
        </div>
    </div>
</section>

<section id="how-it-works" class="how-it-works-section scroll-mt-20">
    <div class="how-it-works-container">
        <header class="how-it-works-heading">
            <p>How it works</p>
            <h2>Five phases, adapted to local readiness.</h2>
            <p class="how-it-works-intro">TESDA and LGUs move from understanding local needs to delivering sustainable, quality-assured programs.</p>
        </header>

        <ol class="how-it-works-phases">
            <li class="how-it-works-phase">
                <span class="how-it-works-number">01</span>
                <h3>Preparatory</h3>
                <p>Understand local conditions, workforce needs, priority sectors, and existing skills programs.</p>
            </li>
            <li class="how-it-works-phase">
                <span class="how-it-works-number">02</span>
                <h3>Advocacy</h3>
                <p>Build local commitment and position skills training as a tool for jobs, enterprise, and growth.</p>
            </li>
            <li class="how-it-works-phase">
                <span class="how-it-works-number">03</span>
                <h3>Capacity building</h3>
                <p>Strengthen CTECs, local TVET structures, facilities, trainers, policies, and partnerships.</p>
            </li>
            <li class="how-it-works-phase">
                <span class="how-it-works-number">04</span>
                <h3>Institutionalization</h3>
                <p>Embed TVET in local policies, development plans, investment programs, and budgets.</p>
            </li>
            <li class="how-it-works-phase">
                <span class="how-it-works-number">05</span>
                <h3>Implementation</h3>
                <p>Deliver locally responsive programs with TESDA technical support and quality assurance.</p>
            </li>
        </ol>
    </div>
</section>

<section id="flexible-by-design" class="flexible-design-section scroll-mt-20">
    <div class="flexible-design-layout">
        <div class="flexible-design-copy">
            <p class="flexible-design-eyebrow">Flexible by design</p>
            <h2>LGUs can start where they are.</h2>
            <p class="flexible-design-intro">An LGU may adopt one arrangement or combine several. Owning a training center is not required to begin.</p>

            <aside class="flexible-design-conditions" aria-labelledby="flexible-conditions-title">
                <h3 id="flexible-conditions-title">Shared conditions for success</h3>
                <ol>
                    <li><span>01</span><p>Convergence among LGUs, TESDA, industry, and training partners</p></li>
                    <li><span>02</span><p>Progressive transfer of responsibility as local capacity grows</p></li>
                    <li><span>03</span><p>Integration into local development and investment plans</p></li>
                    <li><span>04</span><p>TESDA standards, assessment, certification, and quality assurance</p></li>
                </ol>
            </aside>
        </div>

        <ol class="flexible-design-options">
            <li class="flexible-design-option"><span>1</span><div><h3>Integrated local TVET ecosystem</h3><p>Coordinate training providers, industry, schools, and partners around one local skills agenda.</p></div></li>
            <li class="flexible-design-option"><span>2</span><div><h3>LGU-managed scholarship</h3><p>Fund or subsidize residents in TESDA-registered or partner-delivered training programs.</p></div></li>
            <li class="flexible-design-option"><span>3</span><div><h3>Multi-stakeholder partnership</h3><p>Pool financing, facilities, expertise, and employment pathways with public and private partners.</p></div></li>
            <li class="flexible-design-option"><span>4</span><div><h3>Community-based training</h3><p>Bring demand-driven skills programs closer to priority groups in barangays and communities.</p></div></li>
            <li class="flexible-design-option"><span>5</span><div><h3>Specialized skills hub</h3><p>Build sector-focused centers that connect advanced skills, innovation, and enterprise development.</p></div></li>
            <li class="flexible-design-option"><span>6</span><div><h3>LGU-run training center</h3><p>Operate a formal local training facility aligned with TESDA standards and quality requirements.</p></div></li>
        </ol>
    </div>
</section>

<section id="community-highlights" class="relative isolate scroll-mt-20 overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-700 px-4 py-16 text-white sm:px-6 sm:py-20 lg:px-8">
    <div class="mx-auto w-full max-w-[1400px]">
        <div class="mb-8 max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-[0.22em] text-yellow-300">Across the Philippines</p>
            <h2 class="mt-3 font-display text-3xl font-extrabold text-white sm:text-4xl">Community highlights</h2>
            <p class="mt-3 leading-7 text-blue-100/75">See skills and local initiatives in action through stories from our partner communities.</p>
        </div>
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-[minmax(280px,0.8fr)_minmax(0,2fr)]">
    <!-- Left Side: Info Card -->
    <div class="relative h-[300px] w-full overflow-hidden rounded-[22px] border border-white/25 bg-[#243c7a]/45 shadow-xl shadow-black/20 backdrop-blur-xl md:h-[420px]">

        <!-- Content (centered vertically) -->
        <div class="relative z-10 flex h-full flex-col justify-center px-8 py-6 space-y-6">

            <!-- Region Block -->
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.16em] text-yellow-300">Region</p>
                <h2 id="carousel-location" class="mt-1 text-2xl font-bold tracking-wide text-white">Region II</h2>
            </div>

            <!-- Province Block -->
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.16em] text-yellow-300">Province</p>
                <h3 id="carousel-title" class="mt-1 text-2xl font-bold tracking-wide text-white">Solana</h3>
            </div>

            <!-- Description Block -->
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.16em] text-yellow-300">Short description</p>
                <h3 id="carousel-status" class="mt-1 text-sm font-medium text-white">Live Communities</h3>
            </div>

        </div>
    </div>

    <!-- Right Side: Video Carousel -->
    <div class="relative h-[300px] w-full overflow-hidden rounded-[22px] bg-[#17295a] md:h-[420px]">
        @foreach ($videos as $index => $video)
        <video
            class="absolute inset-0 h-full w-full object-cover {{ $index === 0 ? 'opacity-100' : 'opacity-0' }} transition-opacity duration-500"
            data-video="{{ $index }}"
            autoplay
            muted
            loop
            playsinline
            @if ($index===0) src="{{ $video['src'] }}" @else data-src="{{ $video['src'] }}" @endif></video>
        @endforeach

        <div class="absolute inset-0 bg-gradient-to-r from-[#06152b]/80 via-[#06152b]/20 to-[#06152b]/60"></div>

        <div class="absolute left-4 top-4 z-10 rounded-full border border-white/10 bg-[#0a1f44]/70 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.18em] text-yellow-300 backdrop-blur-sm">
            Best Practice Highlight
        </div>

        <div class="absolute bottom-4 left-4 right-4 z-10 flex items-center justify-between gap-3">
            <button type="button" class="carousel-btn rounded-full border border-white/15 bg-[#0a1f44]/70 p-2 text-white transition hover:bg-[#0d2958]" data-action="prev" aria-label="Previous video">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </button>

            <div class="flex items-center gap-2">
                @foreach ($videos as $index => $video)
                <button
                    type="button"
                    class="carousel-dot h-2.5 w-2.5 rounded-full border border-white/40 {{ $index === 0 ? 'bg-yellow-300' : 'bg-white/30' }} transition-all"
                    data-index="{{ $index }}"
                    aria-label="Go to video {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <button type="button" class="carousel-btn rounded-full border border-white/15 bg-[#0a1f44]/70 p-2 text-white transition hover:bg-[#0d2958]" data-action="next" aria-label="Next video">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
    </div>
    </div>
</section>
<section class="uiverse-carousel-section" aria-label="Animated community cards">
    <div class="uiverse-feature-layout">
        <div class="uiverse-card-area">
            <!-- From Uiverse.io by ilkhoeri -->
            <div class="wrapper">
                <div class="inner" style="--quantity: 10;">
                    <div class="card" style="--index: 0;--color-card: 142, 249, 252;"><div class="img"></div></div>
                    <div class="card" style="--index: 1;--color-card: 142, 252, 204;"><div class="img"></div></div>
                    <div class="card" style="--index: 2;--color-card: 142, 252, 157;"><div class="img"></div></div>
                    <div class="card" style="--index: 3;--color-card: 215, 252, 142;"><div class="img"></div></div>
                    <div class="card" style="--index: 4;--color-card: 252, 252, 142;"><div class="img"></div></div>
                    <div class="card" style="--index: 5;--color-card: 252, 208, 142;"><div class="img"></div></div>
                    <div class="card" style="--index: 6;--color-card: 252, 142, 142;"><div class="img"></div></div>
                    <div class="card" style="--index: 7;--color-card: 252, 142, 239;"><div class="img"></div></div>
                    <div class="card" style="--index: 8;--color-card: 204, 142, 252;"><div class="img"></div></div>
                    <div class="card" style="--index: 9;--color-card: 142, 202, 252;"><div class="img"></div></div>
                </div>
            </div>
        </div>

        <div class="uiverse-explainer">
            <p class="uiverse-explainer-eyebrow">What it means</p>
            <h2>A local skills system built around real opportunity.</h2>
            <p class="uiverse-explainer-copy">Train LOKAL puts LGUs at the center of workforce planning and skills-demand identification. TESDA remains the standards-setter, quality assurer, and capacity builder.</p>
            <p class="uiverse-explainer-copy">Participation is voluntary, collaborative, and flexible. Every LGU can choose an approach that matches its priorities, readiness, resources, and local economy.</p>

            <div class="uiverse-principle-grid">
                <article class="uiverse-principle-card">
                    <span class="uiverse-principle-icon employment" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V9m6 10V5m6 14v-7m4 7H2" /></svg>
                    </span>
                    <h3>Employment</h3>
                    <p>Align skills with local jobs and workforce demand.</p>
                </article>
                <article class="uiverse-principle-card">
                    <span class="uiverse-principle-icon enterprise" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18m5-14.5C17 5 15.2 4 12.7 4 10 4 8 5.2 8 7s1.7 2.7 4 3.3 4 1.4 4 3.5-1.8 3.2-4.5 3.2S7 16 7 14.5" /></svg>
                    </span>
                    <h3>Enterprise</h3>
                    <p>Connect training with livelihood and business growth.</p>
                </article>
                <article class="uiverse-principle-card">
                    <span class="uiverse-principle-icon lifelong" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14m0-14C9.5 4.5 6.5 4 3 5v13c3.5-1 6.5-.5 9 2m0-13c2.5-2.5 5.5-3 9-2v13c-3.5-1-6.5-.5-9 2" /></svg>
                    </span>
                    <h3>Lifelong learning</h3>
                    <p>Create accessible pathways for skills throughout life.</p>
                </article>
            </div>
        </div>
    </div>
</section>
<section id="who-benefits" class="audience-support-section">
    <div class="audience-support-grid">
        <article class="audience-support-card">
            <p class="audience-support-eyebrow">Who benefits</p>
            <h2>Training reaches people based on local evidence and need.</h2>
            <p>Priority groups may include indigent and informal-sector families, barangay and community workers, out-of-school and unemployed youth, senior high school graduates, and other locally identified sectors.</p>
        </article>
        <article class="audience-support-card">
            <p class="audience-support-eyebrow">TESDA support</p>
            <h2>National standards with locally responsive delivery.</h2>
            <p>TESDA provides policy guidance, technical assistance, capacity building, program registration or recognition support, monitoring, and quality assurance throughout implementation.</p>
        </article>
    </div>

    <div class="conversation-cta" id="contact">
        <div class="conversation-cta-copy">
            <p class="conversation-cta-eyebrow">Start the conversation</p>
            <h2>Ready to explore Train LOKAL for your community?</h2>
            <p>Connect with your TESDA Provincial or District Office to discuss local priorities, readiness, and the arrangement that fits your LGU.</p>
        </div>
        <div class="conversation-cta-actions">
            <a href="{{ route('support') }}" class="conversation-cta-primary">Find your TESDA contact</a>
            <a href="mailto:help@trainlokal.com" class="conversation-cta-secondary">Email CLGEO</a>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countdown = document.querySelector('[data-countdown-target]');
        if (countdown) {
            const eventTime = new Date(countdown.dataset.countdownTarget).getTime();
            const fields = {
                days: countdown.querySelector('[data-countdown-days]'),
                hours: countdown.querySelector('[data-countdown-hours]'),
                minutes: countdown.querySelector('[data-countdown-minutes]'),
                seconds: countdown.querySelector('[data-countdown-seconds]'),
            };
            const updateCountdown = () => {
                const remaining = Math.max(0, eventTime - Date.now());
                const totalSeconds = Math.floor(remaining / 1000);
                fields.days.textContent = String(Math.floor(totalSeconds / 86400)).padStart(3, '0');
                fields.hours.textContent = String(Math.floor((totalSeconds % 86400) / 3600)).padStart(2, '0');
                fields.minutes.textContent = String(Math.floor((totalSeconds % 3600) / 60)).padStart(2, '0');
                fields.seconds.textContent = String(totalSeconds % 60).padStart(2, '0');
            };
            updateCountdown();
            window.setInterval(updateCountdown, 1000);
        }

        const eventLayout = document.querySelector('[data-event-layout]');
        const detailsPanel = document.getElementById('launching-details-panel');
        const detailsButton = document.querySelector('[data-toggle-launching-details]');
        if (eventLayout && detailsPanel && detailsButton) {
            detailsButton.addEventListener('click', () => {
                const isOpen = detailsButton.getAttribute('aria-expanded') !== 'true';
                detailsButton.setAttribute('aria-expanded', String(isOpen));
                detailsPanel.hidden = !isOpen;
                eventLayout.classList.toggle('is-details-open', isOpen);
            });
        }

        const videos = Array.from(document.querySelectorAll('[data-video]'));
        const dots = Array.from(document.querySelectorAll('.carousel-dot'));
        const buttons = Array.from(document.querySelectorAll('.carousel-btn'));
        const locationEl = document.getElementById('carousel-location');
        const titleEl = document.getElementById('carousel-title');
        const statusEl = document.getElementById('carousel-status');
        const slideData = @json($videos);
        let activeIndex = 0;

        if (statusEl && statusEl.textContent.trim() === '') {
            statusEl.textContent = slideData[0].status || 'Live Communities';
        }

        function showVideo(index) {
            activeIndex = (index + videos.length) % videos.length;

            videos.forEach((video, i) => {
                const isActive = i === activeIndex;
                video.classList.toggle('opacity-100', isActive);
                video.classList.toggle('opacity-0', !isActive);

                if (isActive && video.dataset.src) {
                    video.src = video.dataset.src;
                    video.dataset.src = '';
                    video.load();
                }

                if (isActive) {
                    video.play().catch(() => {});
                } else {
                    video.pause();
                }
            });

            const activeSlide = slideData[activeIndex];
            if (locationEl) locationEl.textContent = activeSlide.label;
            if (titleEl) titleEl.textContent = activeSlide.title;
            if (statusEl) statusEl.textContent = activeSlide.status;

            dots.forEach((dot, i) => {
                dot.classList.toggle('bg-yellow-300', i === activeIndex);
                dot.classList.toggle('bg-white/30', i !== activeIndex);
                dot.classList.toggle('scale-125', i === activeIndex);
            });
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', function() {
                showVideo(Number(dot.dataset.index));
            });
        });

        buttons.forEach((button) => {
            button.addEventListener('click', function() {
                const direction = button.dataset.action === 'next' ? 1 : -1;
                showVideo(activeIndex + direction);
            });
        });

        videos.forEach((video, index) => {
            video.addEventListener('ended', function() {
                showVideo(index + 1);
            });
        });
    });
</script>
@endsection
