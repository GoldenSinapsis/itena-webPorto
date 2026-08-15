@extends('layouts.app')

@section('title', 'Pricing - INETA')

@section('content')

<section class="max-w-6xl mx-auto px-6 lg:px-8 pt-16 lg:pt-24 pb-14 text-center">
    <h1 class="font-display font-extrabold text-4xl sm:text-5xl leading-[1.1] text-slate-900">
        Investasi Tepat Untuk Skala Bisnis <span class="text-ineta-purple">Anda</span>
    </h1>
    <p class="mt-5 text-slate-600 text-lg max-w-xl mx-auto">
        Pilih paket yang sesuai dengan target pertumbuhan dan kebutuhan operasional hari ini. Semua paket bisa disesuaikan lebih lanjut sesuai kebutuhan proyek Anda.
    </p>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-20">
    <div class="grid lg:grid-cols-3 gap-8 items-stretch">

        <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-8">
            <h3 class="font-display font-bold text-xl text-center text-slate-900">Basic</h3>
            <p class="mt-2 text-sm text-slate-500 text-center min-h-[40px]">Perfect for individuals or companies profile.</p>
            <div class="mt-6 text-center">
                <p class="text-sm text-slate-400 line-through">IDR 999.999</p>
                <p class="font-display font-extrabold text-3xl text-slate-900">IDR 750.000</p>
            </div>
            <a href="{{ url('/hubungi-kami') }}" class="mt-6 block text-center rounded-full bg-ineta-purple text-white text-sm font-semibold py-3 hover:bg-ineta-purple-dark transition-colors">
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
            <a href="{{ url('/contact') }}" class="mt-6 block text-center rounded-full bg-ineta-purple text-white text-sm font-semibold py-3 hover:bg-ineta-purple-dark transition-colors">
                Buy Now
            </a>
            <hr class="my-6 border-slate-200">
            <p class="text-sm text-slate-600 min-h-[40px]">Built with Laravel + MySQL, responsive &amp; mobile-friendly.</p>
            <p class="mt-4 text-sm font-semibold text-slate-900">What you will get:</p>
            <ul class="mt-3 space-y-2.5 text-sm text-slate-600 flex-1">
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Multi-page, 5–7 pages: Home, About, Services, Contact, etc.</li>
                <li class="flex gap-2"><span class="text-ineta-gold">•</span> Admin dashboard with 2–3 CRUD for articles, News, Form, etc.</li>
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
            <a href="{{ url('/contact') }}" class="mt-6 block text-center rounded-full bg-ineta-purple text-white text-sm font-semibold py-3 hover:bg-ineta-purple-dark transition-colors">
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
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-20">
    <div class="text-center max-w-2xl mx-auto mb-12">
        <h2 class="font-display font-bold text-3xl text-slate-900">Bandingkan Semua Fitur</h2>
        <p class="mt-3 text-slate-500">Lihat perbandingan lengkap antar paket agar lebih mudah menentukan pilihan.</p>
    </div>

    <div class="overflow-x-auto bg-white rounded-2xl border border-slate-500">
        <table class="w-full min-w-[720px] text-sm">
            <thead>
                <tr class="bg-[#000000] text-left">
                    <th class="py-4 px-6 font-semibold text-slate-100">Fitur</th>
                    <th class="py-4 px-6 font-semibold text-slate-100 text-center">Basic</th>
                    <th class="py-4 px-6 font-semibold text-slate-100 text-center">Advanced</th>
                    <th class="py-4 px-6 font-semibold text-slate-100 text-center">Premium</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 p-3">
                @php
                    $rows = [
                        ['Jumlah Halaman', '1–3 Halaman', '5–7 Halaman', 'Custom (Unlimited)'],
                        ['Admin Dashboard', false, '2–3 CRUD', 'Full CRUD'],
                        ['Autentikasi Login & Register', false, true, true],
                        ['Integrasi Email / SMTP', false, true, true],
                        ['SEO-friendly URL', false, true, true],
                        ['Export & Import Excel/PDF', false, true, true],
                        ['API Ready (Mobile/Sistem lain)', false, false, true],
                        ['Notifikasi Otomatis', false, false, true],
                        ['Security reCAPTCHA & Validasi', false, false, true],
                        ['Hosting', 'Termasuk', 'Tidak termasuk', 'Premium, termasuk'],
                        ['Free Maintenance', false, '1 bulan', '1 bulan'],
                    ];
                @endphp
                @foreach ($rows as $row)
                    <tr class="hover:bg-slate-50/60">
                        <td class="py-4 px-6 font-medium text-slate-700">{{ $row[0] }}</td>
                        @foreach ([$row[1], $row[2], $row[3]] as $i => $cell)
                            <td class="py-4 px-6 text-center {{ $i === 1 ? 'bg-ineta-purple/5' : '' }}">
                                @if ($cell === true)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-auto text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                @elseif ($cell === false)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-auto text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                @else
                                    <span class="text-slate-600">{{ $cell }}</span>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">
    <div class="text-center max-w-2xl mx-auto mb-12">
        <h2 class="font-display font-bold text-3xl text-slate-900">Pertanyaan yang Sering Diajukan</h2>
        <p class="mt-3 text-slate-500">Masih ragu memilih paket? Berikut beberapa hal yang sering ditanyakan klien kami.</p>
    </div>

    <div class="max-w-3xl mx-auto divide-y divide-slate-200 rounded-2xl border border-slate-200 bg-white">
        @php
            $faqs = [
                [
                    'q' => 'Apakah harga di atas sudah final?',
                    'a' => 'Harga yang tertera adalah harga dasar untuk kebutuhan standar. Jika proyek Anda membutuhkan fitur tambahan di luar paket, kami akan memberikan penawaran khusus setelah sesi konsultasi.',
                ],
                [
                    'q' => 'Berapa lama waktu pengerjaan setiap paket?',
                    'a' => 'Paket Basic umumnya selesai dalam 1–2 minggu, Advanced 3–5 minggu, dan Premium 6–10 minggu tergantung kompleksitas fitur yang diminta.',
                ],
                [
                    'q' => 'Apakah bisa upgrade paket di tengah proyek?',
                    'a' => 'Bisa. Anda dapat menambah fitur atau upgrade ke paket yang lebih tinggi kapan saja, kami akan menyesuaikan biaya berdasarkan selisih kebutuhan.',
                ],
                [
                    'q' => 'Apakah ada garansi setelah website selesai?',
                    'a' => 'Setiap paket Advanced dan Premium sudah termasuk free maintenance selama 1 bulan untuk perbaikan bug tanpa biaya tambahan.',
                ],
                [
                    'q' => 'Bagaimana cara mulai memesan?',
                    'a' => 'Silakan hubungi tim kami lewat halaman Contact, ceritakan kebutuhan Anda, dan kami akan menyiapkan proposal serta timeline pengerjaan.',
                ],
            ];
        @endphp
        @foreach ($faqs as $index => $faq)
            <details class="group p-6" {{ $index === 0 ? 'open' : '' }}>
                <summary class="flex items-center justify-between cursor-pointer list-none">
                    <span class="font-semibold text-slate-900">{{ $faq['q'] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-ineta-purple shrink-0 transition-transform group-open:rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </summary>
                <p class="mt-3 text-sm text-slate-500 leading-relaxed">{{ $faq['a'] }}</p>
            </details>
        @endforeach
    </div>

    <div class="mt-14 text-center">
        <h3 class="font-display font-bold text-2xl text-slate-900">Masih bingung paket mana yang cocok?</h3>
        <p class="mt-2 text-slate-500">Konsultasikan langsung kebutuhan Anda dengan tim kami, gratis tanpa komitmen.</p>
        <a href="{{ url('/contact') }}"
           class="mt-6 inline-flex items-center justify-center rounded-full bg-ineta-purple px-8 py-3.5 text-sm font-semibold text-white hover:bg-ineta-purple-dark transition-colors">
            Konsultasi Gratis
        </a>
    </div>
</section>

@endsection
