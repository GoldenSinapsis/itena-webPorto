@extends('layouts.app')

@section('title', 'INETA - Digital Solutions for Modern Businesses')

@section('content')

<section class="max-w-6xl mx-auto px-6 lg:px-8 pt-16 lg:pt-24 pb-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <div>
            <h1 class="font-display font-extrabold text-4xl sm:text-5xl leading-[1.1] text-slate-900">
                Digital Solutions,<br class="hidden sm:block">
                for Modern <span class="text-ineta-purple">Businesses</span>
            </h1>
            <p class="mt-6 text-slate-600 text-lg leading-relaxed max-w-lg">
                We design and develop modern websites, web applications, mobile apps,
                and business systems that help your business grow.
            </p>
            <div class="mt-9 flex flex-wrap gap-4">
                <a href="{{ url('/harga') }}"
                   class="inline-flex items-center justify-center rounded-full bg-ineta-purple px-8 py-3.5 text-sm font-semibold text-white hover:bg-ineta-purple-dark transition-colors">
                    Get Started
                </a>
                <a href="{{ url('/harga') }}"
                   class="inline-flex items-center justify-center rounded-full border-2 border-ineta-purple px-8 py-3.5 text-sm font-semibold text-ineta-purple hover:bg-ineta-purple hover:text-white transition-colors">
                    Pricing
                </a>
            </div>
        </div>

        <div class="w-full">
            <div class="relative w-full aspect-[600/400] rounded-2xl overflow-hidden bg-gradient-to-br from-ineta-purple to-ineta-purple-light shadow-xl shadow-ineta-purple/20">
                <svg viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <defs>
                        <linearGradient id="bg" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#4A3B72"/>
                            <stop offset="100%" stop-color="#5F4E8C"/>
                        </linearGradient>
                    </defs>
                    <rect width="600" height="400" fill="url(#bg)"/>
                    <circle cx="520" cy="60" r="90" fill="#ffffff" opacity="0.04"/>
                    <circle cx="40" cy="360" r="120" fill="#ffffff" opacity="0.04"/>

                    <rect x="120" y="270" width="360" height="18" rx="6" fill="#2F2450"/>
                    <rect x="150" y="90" width="300" height="185" rx="10" fill="#231A42"/>
                    <rect x="162" y="102" width="276" height="161" rx="4" fill="#F8F5EF"/>

                    <rect x="162" y="102" width="276" height="26" fill="#EDE7DA"/>
                    <circle cx="176" cy="115" r="4" fill="#E8A33D"/>
                    <circle cx="190" cy="115" r="4" fill="#4A3B72" opacity="0.4"/>
                    <circle cx="204" cy="115" r="4" fill="#4A3B72" opacity="0.4"/>

                    <rect x="162" y="128" width="56" height="135" fill="#4A3B72"/>
                    <rect x="174" y="144" width="32" height="6" rx="3" fill="#E8A33D"/>
                    <rect x="174" y="164" width="32" height="6" rx="3" fill="#ffffff" opacity="0.5"/>
                    <rect x="174" y="184" width="32" height="6" rx="3" fill="#ffffff" opacity="0.5"/>
                    <rect x="174" y="204" width="32" height="6" rx="3" fill="#ffffff" opacity="0.5"/>

                    <rect x="228" y="140" width="200" height="70" rx="6" fill="#ffffff"/>
                    <polyline points="238,195 260,175 282,185 304,160 326,170 348,150 370,165 392,145 414,158"
                              fill="none" stroke="#E8A33D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>

                    <rect x="228" y="220" width="92" height="34" rx="6" fill="#ffffff"/>
                    <rect x="238" y="230" width="36" height="6" rx="3" fill="#4A3B72" opacity="0.5"/>
                    <rect x="238" y="241" width="20" height="6" rx="3" fill="#E8A33D"/>

                    <rect x="336" y="220" width="92" height="34" rx="6" fill="#ffffff"/>
                    <rect x="346" y="230" width="36" height="6" rx="3" fill="#4A3B72" opacity="0.5"/>
                    <rect x="346" y="241" width="20" height="6" rx="3" fill="#E8A33D"/>

                    <rect x="378" y="255" width="150" height="60" rx="12" fill="#ffffff"/>
                    <circle cx="404" cy="285" r="14" fill="#E8A33D"/>
                    <path d="M398 285l4 5 8-10" stroke="#ffffff" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="428" y="277" width="80" height="6" rx="3" fill="#4A3B72" opacity="0.7"/>
                    <rect x="428" y="290" width="56" height="6" rx="3" fill="#4A3B72" opacity="0.35"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-20">
    <div class="text-center max-w-2xl mx-auto">
        <h2 class="font-display font-bold text-3xl sm:text-4xl text-slate-900">
            Mengapa harus memilih <span class="text-ineta-purple">Ineta</span>?
        </h2>
        <p class="mt-4 text-slate-500">
            Kami membantu bisnis Anda bertumbuh lewat solusi digital yang cepat, aman, dan siap berkembang seiring waktu.
        </p>
    </div>

    <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
            $features = [
                [
                    'title' => 'Fast Development',
                    'desc' => 'Kami menerapkan workflow yang terstruktur, mulai dari perencanaan, desain, pengembangan, hingga deployment, sehingga proyek diselesaikan lebih cepat tanpa mengorbankan performa maupun kualitas kode.',
                    'icon' => 'bolt',
                ],
                [
                    'title' => 'Modern Technology',
                    'desc' => 'Setiap solusi dikembangkan menggunakan teknologi modern dan praktik terbaik industri, memastikan aplikasi mudah dikembangkan, aman, dan siap mengikuti pertumbuhan bisnis di masa depan.',
                    'icon' => 'globe',
                ],
                [
                    'title' => 'Responsive Design',
                    'desc' => 'Aplikasi dan website dirancang agar tampil optimal di desktop, tablet, maupun smartphone, menghadirkan pengalaman pengguna yang konsisten dan nyaman di berbagai ukuran layar.',
                    'icon' => 'device',
                ],
                [
                    'title' => 'Scalable Architecture',
                    'desc' => 'Kami membangun sistem dengan arsitektur yang fleksibel, sehingga penambahan fitur dan integrasi layanan baru dapat dilakukan tanpa perlu membangun ulang sistem dari awal.',
                    'icon' => 'chart',
                ],
            ];
        @endphp

        @foreach ($features as $feature)
            <div class="rounded-2xl border border-slate-200 bg-white p-7 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-ineta-purple/10 flex items-center justify-center text-ineta-purple">
                    @switch($feature['icon'])
                        @case('bolt')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            @break
                        @case('globe')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="9"/>
                                <path stroke-linecap="round" d="M3 12h18M12 3c2.5 2.7 3.8 6 3.8 9s-1.3 6.3-3.8 9c-2.5-2.7-3.8-6-3.8-9S9.5 5.7 12 3z"/>
                            </svg>
                            @break
                        @case('device')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <rect x="4" y="4" width="16" height="12" rx="2"/>
                                <circle cx="14" cy="10" r="2" fill="currentColor" stroke="none"/>
                                <path stroke-linecap="round" d="M9 20h6"/>
                            </svg>
                            @break
                        @case('chart')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 20V10M12 20V4M20 20v-6" />
                            </svg>
                            @break
                    @endswitch
                </div>
                <h3 class="mt-5 font-display font-bold text-lg text-slate-900">{{ $feature['title'] }}</h3>
                <p class="mt-2.5 text-sm text-slate-500 leading-relaxed">{{ $feature['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-20">
    <div class="relative w-full aspect-[1300/300] rounded-2xl overflow-hidden bg-ineta-purple">
        <svg viewBox="0 0 1300 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full" preserveAspectRatio="xMidYMid slice">
            <defs>
                <linearGradient id="bannerGrad" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#3A2E5A"/>
                    <stop offset="100%" stop-color="#5F4E8C"/>
                </linearGradient>
                <pattern id="dots" width="26" height="26" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1.6" fill="#ffffff" opacity="0.08"/>
                </pattern>
            </defs>
            <rect width="1300" height="300" fill="url(#bannerGrad)"/>
            <rect width="1300" height="300" fill="url(#dots)"/>
            <circle cx="1160" cy="60" r="130" fill="#E8A33D" opacity="0.10"/>
            <circle cx="120" cy="260" r="160" fill="#ffffff" opacity="0.05"/>

            <text x="70" y="130" font-family="Sora, sans-serif" font-weight="800" font-size="38" fill="#ffffff">
                Siap membawa bisnis Anda ke level digital berikutnya?
            </text>
            <text x="70" y="168" font-family="Plus Jakarta Sans, sans-serif" font-size="17" fill="#E7E2F5">
                Konsultasikan kebutuhan produk digital Anda bersama tim Ineta, gratis.
            </text>

            <rect x="70" y="200" width="190" height="50" rx="25" fill="#E8A33D"/>
            <text x="105" y="232" font-family="Plus Jakarta Sans, sans-serif" font-weight="700" font-size="16" fill="#3A2E5A">Hubungi Kami →</text>

            <text x="980" y="205" font-family="Sora, sans-serif" font-weight="800" font-size="150" fill="#ffffff" opacity="0.06">&lt;/&gt;</text>
        </svg>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">
    <div class="text-center max-w-2xl mx-auto">
        <h2 class="font-display font-bold text-3xl sm:text-4xl text-slate-900">
            Investasi Tepat Untuk Skala Bisnis <span class="text-ineta-purple">Anda?</span>
        </h2>
        <p class="mt-4 text-slate-500">
            Pilih paket yang sesuai dengan target pertumbuhan dan kebutuhan operasional hari ini.
        </p>
    </div>

    <div class="mt-14 grid lg:grid-cols-3 gap-8 items-stretch">

        <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-8">
            <h3 class="font-display font-bold text-xl text-center text-slate-900">Basic</h3>
            <p class="mt-2 text-sm text-slate-500 text-center min-h-[40px]">Perfect for individuals or companies profile.</p>
            <div class="mt-6 text-center">
                <p class="text-sm text-slate-400 line-through">IDR 999.999</p>
                <p class="font-display font-extrabold text-3xl text-slate-900">IDR 750.000</p>
            </div>
            <a href="{{ url('/harga') }}" class="mt-6 block text-center rounded-full bg-ineta-purple text-white text-sm font-semibold py-3 hover:bg-ineta-purple-dark transition-colors">
                Buy Now
            </a>
            <hr class="my-6 border-slate-200">
            <p class="text-sm text-slate-600 min-h-[40px]">Built with React, responsive &amp; mobile-friendly.</p>
            <p class="mt-4 text-sm font-semibold text-slate-900">What you will get:</p>
            <ul class="mt-3 space-y-2.5 text-sm text-slate-600 flex-1">
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Multi-page, 1–3 pages: Home, About, Portofolio, etc.</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Basic design template</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Responsive mobile-friendly</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Include hosting + domain</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Simple contact form, email directly to admin</li>
                <li class="flex gap-2 text-slate-400"><span class="text-slate-300">•</span> Without admin dashboard</li>
                <li class="flex gap-2 text-slate-400"><span class="text-slate-300">•</span> Exclude CRUD features</li>
            </ul>
            <p class="mt-6 text-xs italic text-slate-400">Best choice for portfolios, personal branding, or landing pages.</p>
        </div>

        <div class="relative flex flex-col rounded-2xl border-2 border-ineta-purple bg-white p-8 shadow-xl shadow-ineta-purple/10">
            <span class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-ineta-purple text-white text-xs font-semibold px-4 py-1.5">
                Best Seller
            </span>
            <h3 class="font-display font-bold text-xl text-center text-slate-900">Advanced</h3>
            <p class="mt-2 text-sm text-slate-500 text-center min-h-[40px]">Built for growing businesses that need more power.</p>
            <div class="mt-6 text-center">
                <p class="text-sm text-slate-400 line-through">IDR 3.000.000</p>
                <p class="font-display font-extrabold text-3xl text-slate-900">IDR 2.500.000</p>
            </div>
            <a href="{{ url('/harga') }}" class="mt-6 block text-center rounded-full bg-ineta-purple text-white text-sm font-semibold py-3 hover:bg-ineta-purple-dark transition-colors">
                Buy Now
            </a>
            <hr class="my-6 border-slate-200">
            <p class="text-sm text-slate-600 min-h-[40px]">Built with Laravel + MySQL, responsive &amp; mobile-friendly.</p>
            <p class="mt-4 text-sm font-semibold text-slate-900">What you will get:</p>
            <ul class="mt-3 space-y-2.5 text-sm text-slate-600 flex-1">
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Multi-page, 5–7 pages: Home, About, Services, Contact, etc.</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Admin dashboard with 2–3 CRUD for Article, News, Form, etc.</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Fitur autentikasi Login &amp; Register</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Email terhubung dengan Mailhog / SMTP</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> SEO-friendly URL</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> A more modern design using a dynamic layout</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Search Engine Optimazion (SEO) dengan sitemap, metatools, slug</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Export file Excel + PDF</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Import file Excel + PDF</li>
                <li class="flex gap-2 text-slate-400"><span class="text-slate-300">•</span> Exclude hosting</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Free maintenance 1 month</li>
            </ul>
            <p class="mt-6 text-xs italic text-slate-400">Ideal for company profiles, startups, or agencies that need admin management and SEO support.</p>
        </div>

        <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-8">
            <h3 class="font-display font-bold text-xl text-center text-slate-900">Premium</h3>
            <p class="mt-2 text-sm text-slate-500 text-center min-h-[40px]">For brands that want full digital impact.</p>
            <div class="mt-6 text-center">
                <p class="text-sm text-slate-400 line-through">IDR 7.000.000</p>
                <p class="font-display font-extrabold text-3xl text-slate-900">IDR 5.000.000</p>
            </div>
            <a href="{{ url('/harga') }}" class="mt-6 block text-center rounded-full bg-ineta-purple text-white text-sm font-semibold py-3 hover:bg-ineta-purple-dark transition-colors">
                Buy Now
            </a>
            <hr class="my-6 border-slate-200">
            <p class="text-sm text-slate-600 min-h-[40px]">Built with Laravel as a backend, React JS as a front end &amp; mobile-friendly.</p>
            <p class="mt-4 text-sm font-semibold text-slate-900">What you will get:</p>
            <ul class="mt-3 space-y-2.5 text-sm text-slate-600 flex-1">
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Custom design</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Full CRUD admin panel for all content: events, news, gallery, users, etc.</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> API ready, can be integrated with mobile apps or other systems</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Notification systems (email otomatis ke user/admin)</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Security setup reCAPTCHA, full validation</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Performance optimization</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Include hosting premium</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Free maintenance 1 month</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Search Engine Optimazion (SEO) dengan sitemap, metatools</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Export file Excel + PDF</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Import file Excel + PDF</li>
            </ul>
            <p class="mt-6 text-xs italic text-slate-400">Perfect for enterprise-level projects, digital agencies, or brands that demand full automation and integrations.</p>
        </div>
    </div>

    <div class="mt-10 text-center">
        <a href="{{ url('/harga') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-ineta-purple hover:text-ineta-purple-dark transition-colors">
            Lihat detail lengkap semua paket
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>

@endsection
