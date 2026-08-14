@extends('layouts.app')

@section('title', 'About Us - INETA')

@section('content')

<section class="max-w-6xl mx-auto px-6 lg:px-8 pt-16 lg:pt-24 pb-16">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="font-display font-extrabold text-4xl sm:text-5xl leading-[1.1] text-slate-900">
                Membangun Solusi Digital yang <span class="text-ineta-purple">Bermakna</span>
            </h1>
            <p class="mt-6 text-slate-600 text-lg leading-relaxed">
                INETA lahir dari keinginan sederhana - membantu bisnis bertumbuh lewat teknologi yang tepat guna.
                Sejak awal berdiri, kami percaya bahwa produk digital yang baik bukan hanya soal tampilan yang
                indah, tetapi juga sistem yang kokoh, aman, dan mudah dikembangkan seiring waktu.
            </p>
        </div>
        <div class="w-full">
            <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden bg-gradient-to-br from-ineta-purple to-ineta-purple-light shadow-xl shadow-ineta-purple/20">
                <svg viewBox="0 0 600 450" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <defs>
                        <linearGradient id="aboutBg" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#4A3B72"/>
                            <stop offset="100%" stop-color="#5F4E8C"/>
                        </linearGradient>
                    </defs>
                    <rect width="600" height="450" fill="url(#aboutBg)"/>
                    <circle cx="500" cy="70" r="100" fill="#ffffff" opacity="0.05"/>
                    <circle cx="60" cy="400" r="130" fill="#E8A33D" opacity="0.08"/>

                    <circle cx="220" cy="200" r="46" fill="#ffffff" opacity="0.95"/>
                    <circle cx="220" cy="180" r="18" fill="#4A3B72"/>
                    <path d="M188 232c8-18 26-24 32-24s24 6 32 24" fill="#4A3B72"/>

                    <circle cx="340" cy="230" r="56" fill="#E8A33D" opacity="0.95"/>
                    <circle cx="340" cy="206" r="21" fill="#3A2E5A"/>
                    <path d="M302 268c9-21 30-28 38-28s29 7 38 28" fill="#3A2E5A"/>

                    <circle cx="420" cy="180" r="38" fill="#ffffff" opacity="0.8"/>
                    <circle cx="420" cy="163" r="15" fill="#4A3B72"/>
                    <path d="M394 214c7-15 21-20 26-20s19 5 26 20" fill="#4A3B72"/>

                    <rect x="150" y="320" width="120" height="46" rx="12" fill="#ffffff"/>
                    <circle cx="176" cy="343" r="10" fill="#E8A33D"/>
                    <rect x="196" y="336" width="58" height="6" rx="3" fill="#4A3B72" opacity="0.6"/>
                    <rect x="196" y="348" width="40" height="6" rx="3" fill="#4A3B72" opacity="0.3"/>

                    <rect x="330" y="330" width="120" height="46" rx="12" fill="#ffffff"/>
                    <circle cx="356" cy="353" r="10" fill="#4A3B72"/>
                    <rect x="376" y="346" width="58" height="6" rx="3" fill="#4A3B72" opacity="0.6"/>
                    <rect x="376" y="358" width="40" height="6" rx="3" fill="#4A3B72" opacity="0.3"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-20">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 rounded-2xl bg-ineta-purple text-white py-10 px-8">
        @php
            $stats = [
                ['value' => '#+', 'label' => 'Proyek Selesai'],
                ['value' => '#', 'label' => 'Klien Terpercaya'],
                ['value' => '#+', 'label' => 'Tahun Pengalaman'],
                ['value' => '#%', 'label' => 'Kepuasan Klien'],
            ];
        @endphp
        @foreach ($stats as $stat)
            <div class="text-center">
                <p class="font-display font-extrabold text-3xl sm:text-4xl text-ineta-gold">{{ $stat['value'] }}</p>
                <p class="mt-2 text-sm text-white/80">{{ $stat['label'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-20">
    <div class="grid lg:grid-cols-2 gap-12">
        <div>
            <h2 class="font-display font-bold text-3xl text-slate-900">Cerita Kami</h2>
            <p class="mt-5 text-slate-600 leading-relaxed">
                Semua bermula dari sekelompok developer dan desainer yang sering melihat pelaku usaha kesulitan
                mendapatkan solusi digital yang benar-benar sesuai kebutuhan mereka — bukan sekadar template
                generik yang dijual berulang kali tanpa penyesuaian.
            </p>
            <p class="mt-4 text-slate-600 leading-relaxed">
                Dari situ, INETA dibangun dengan satu misi: menjadi mitra teknologi yang mendengarkan, memahami
                proses bisnis klien, lalu menerjemahkannya menjadi sistem yang benar-benar dipakai dan memberi
                dampak, bukan sekadar produk jadi yang dipasang lalu dilupakan.
            </p>
            <p class="mt-4 text-slate-600 leading-relaxed">
                Hari ini, tim kami telah membantu puluhan bisnis dari berbagai skala — mulai dari startup rintisan,
                sekolah, hingga perusahaan enterprise — merancang produk digital yang scalable, aman, dan siap
                bertumbuh bersama kebutuhan mereka.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 gap-6">
            @php
                $values = [
                    ['title' => 'Visi', 'desc' => 'Menjadi mitra teknologi terpercaya yang membawa bisnis di Indonesia naik kelas melalui solusi digital berkualitas.'],
                    ['title' => 'Misi', 'desc' => 'Merancang produk digital yang relevan, scalable, dan berdampak nyata bagi pertumbuhan setiap klien kami.'],
                    ['title' => 'Kolaborasi', 'desc' => 'Kami percaya hasil terbaik lahir dari komunikasi terbuka dan kerja sama erat dengan klien di setiap tahap.'],
                    ['title' => 'Kualitas', 'desc' => 'Setiap baris kode dan setiap detail desain dikerjakan dengan standar tinggi, bukan asal jadi.'],
                ];
            @endphp
            @foreach ($values as $value)
                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <h3 class="font-display font-bold text-lg text-ineta-purple">{{ $value['title'] }}</h3>
                    <p class="mt-2 text-sm text-slate-500 leading-relaxed">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="max-w-4xl  mt-5 mx-auto px-6 lg:px-8 pb-24">
    <div class="rounded-2xl bg-white p-5 border border-slate-500 px-8 py-20 text-center">
        <h2 class="font-display font-bold text-2xl sm:text-3xl text-slate-900">
            Mari berkolaborasi mewujudkan ide digital Anda
        </h2>
        <p class="mt-3 text-slate-500 max-w-lg mx-auto">
            Ceritakan kebutuhan bisnis Anda, tim kami siap membantu dari perencanaan hingga peluncuran.
        </p>
        <a href="{{ url('/hubungi-kami') }}"
           class="mt-7 inline-flex items-center justify-center rounded-full bg-ineta-purple px-8 py-3.5 text-sm font-semibold text-white hover:bg-ineta-purple-dark transition-colors">
            Hubungi Kami
        </a>
    </div>
</section>

@endsection
