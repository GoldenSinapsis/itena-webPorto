@extends('layouts.app')

@section('title', 'Contact - INETA')

@section('content')

<section class="max-w-6xl mx-auto px-6 lg:px-8 pt-16 lg:pt-24 pb-14 text-center">
    <h1 class="font-display font-extrabold text-4xl sm:text-5xl leading-[1.1] text-slate-900">
        Mari Diskusikan <span class="text-ineta-purple">Kebutuhan Digital</span> Anda
    </h1>
    <p class="mt-5 text-slate-600 text-lg max-w-xl mx-auto">
        Tim kami siap membantu, mulai dari konsultasi kebutuhan hingga estimasi proyek. Pilih cara yang paling nyaman untuk Anda.
    </p>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-16">
    <div class="grid sm:grid-cols-3 gap-6">

        <a href="#" target="_blank" rel="noopener"
           class="group rounded-2xl border border-slate-200 bg-white p-7 hover:border-ineta-purple hover:shadow-lg transition-all">
            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                    <path d="M12.004 2.003c-5.514 0-9.997 4.483-9.997 9.997 0 1.762.462 3.484 1.34 4.997L2 22l5.117-1.318a9.947 9.947 0 004.887 1.29h.004c5.514 0 9.997-4.483 9.997-9.997 0-2.67-1.04-5.18-2.928-7.067a9.935 9.935 0 00-7.073-2.905zm0 18.062h-.003a8.36 8.36 0 01-4.267-1.171l-.306-.182-3.037.782.81-2.96-.199-.304a8.372 8.372 0 01-1.284-4.465c0-4.62 3.76-8.38 8.39-8.38a8.336 8.336 0 015.933 2.462 8.34 8.34 0 012.455 5.925c0 4.62-3.76 8.293-8.492 8.293z"/>
                </svg>
            </div>
            <h3 class="mt-5 font-display font-bold text-lg text-slate-900">WhatsApp</h3>
            <p class="mt-1.5 text-sm text-slate-500">Respon cepat untuk konsultasi awal</p>
            <p class="mt-3 text-sm font-semibold text-ineta-purple group-hover:text-ineta-purple-dark">+62 xxxxxxx</p>
        </a>

        <a href="#" target="_blank" rel="noopener"
           class="group rounded-2xl border border-slate-200 bg-white p-7 hover:border-ineta-purple hover:shadow-lg transition-all">
            <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.332.014 7.052.072 2.695.272.273 2.69.073 7.052.014 8.332 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.332 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.668-.072-4.948-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                </svg>
            </div>
            <h3 class="mt-5 font-display font-bold text-lg text-slate-900">Instagram</h3>
            <p class="mt-1.5 text-sm text-slate-500">Lihat portofolio dan aktivitas kami</p>
            <p class="mt-3 text-sm font-semibold text-ineta-purple group-hover:text-ineta-purple-dark">@ineta.dev</p>
        </a>

        <a href="#"
           class="group rounded-2xl border border-slate-200 bg-white p-7 hover:border-ineta-purple hover:shadow-lg transition-all">
            <div class="w-12 h-12 rounded-xl bg-ineta-purple/10 flex items-center justify-center text-ineta-purple">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h3 class="mt-5 font-display font-bold text-lg text-slate-900">Email</h3>
            <p class="mt-1.5 text-sm text-slate-500">Untuk penawaran kerja sama resmi</p>
            <p class="mt-3 text-sm font-semibold text-ineta-purple group-hover:text-ineta-purple-dark">hello@ineta.dev</p>
        </a>
    </div>
</section>

<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">
    <div class="grid lg:grid-cols-5 gap-8 rounded-2xl border border-slate-200 bg-white overflow-hidden">

        <div class="lg:col-span-3 p-8 sm:p-10">
            <h2 class="font-display font-bold text-2xl text-slate-900">Kirim Pesan</h2>
            <p class="mt-2 text-sm text-slate-500">Isi form di bawah, tim kami akan menghubungi Anda dalam 1x24 jam.</p>

            <form action="{{ url('/contact') }}" method="POST" class="mt-8 space-y-5">
                @csrf
                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                               class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ineta-purple/40 focus:border-ineta-purple"
                               placeholder="Nama Anda">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ineta-purple/40 focus:border-ineta-purple"
                               placeholder="nama@email.com">
                    </div>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-semibold text-slate-700 mb-2">Nomor WhatsApp</label>
                    <input type="text" id="phone" name="phone"
                           class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ineta-purple/40 focus:border-ineta-purple"
                           placeholder="08xx xxxx xxxx">
                </div>
                <div>
                    <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2">Subjek</label>
                    <select id="subject" name="subject"
                            class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ineta-purple/40 focus:border-ineta-purple">
                        <option>Konsultasi Proyek Baru</option>
                        <option>Kerja Sama / Partnership</option>
                        <option>Support &amp; Maintenance</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div>
                    <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Pesan</label>
                    <textarea id="message" name="message" rows="5" required
                              class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-ineta-purple/40 focus:border-ineta-purple"
                              placeholder="Ceritakan kebutuhan proyek Anda..."></textarea>
                </div>
                <button type="submit"
                        class="w-full sm:w-auto inline-flex items-center justify-center rounded-full bg-ineta-purple px-8 py-3.5 text-sm font-semibold text-white hover:bg-ineta-purple-dark transition-colors">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <div class="lg:col-span-2 bg-ineta-purple text-white p-8 sm:p-10 flex flex-col justify-between">
            <div>
                <h3 class="font-display font-bold text-xl">Informasi Kontak</h3>
                <p class="mt-2 text-sm text-white/70 leading-relaxed">
                    Punya pertanyaan cepat? Langsung hubungi kami lewat kanal berikut.
                </p>

                <ul class="mt-8 space-y-6 text-sm">
                    <li class="flex gap-3">
                        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-white/10 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Lokasi</p>
                            <p class="text-white/70 mt-1">Jawa Barat, Indonesia</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-white/10 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Jam Operasional</p>
                            <p class="text-white/70 mt-1">XXXXXX</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-white/10 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Email</p>
                            <p class="text-white/70 mt-1">hello@ineta.dev</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="mt-10 flex items-center gap-3">
                <a href="#" target="_blank" rel="noopener"
                   class="flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-ineta-gold hover:text-ineta-purple transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                        <path d="M12.004 2.003c-5.514 0-9.997 4.483-9.997 9.997 0 1.762.462 3.484 1.34 4.997L2 22l5.117-1.318a9.947 9.947 0 004.887 1.29h.004c5.514 0 9.997-4.483 9.997-9.997 0-2.67-1.04-5.18-2.928-7.067a9.935 9.935 0 00-7.073-2.905zm0 18.062h-.003a8.36 8.36 0 01-4.267-1.171l-.306-.182-3.037.782.81-2.96-.199-.304a8.372 8.372 0 01-1.284-4.465c0-4.62 3.76-8.38 8.39-8.38a8.336 8.336 0 015.933 2.462 8.34 8.34 0 012.455 5.925c0 4.62-3.76 8.293-8.492 8.293z"/>
                    </svg>
                </a>
                <a href="#" target="_blank" rel="noopener"
                   class="flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-ineta-gold hover:text-ineta-purple transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.332.014 7.052.072 2.695.272.273 2.69.073 7.052.014 8.332 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.332 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.668-.072-4.948-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                    </svg>
                </a>
                <a href="#"
                   class="flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-ineta-gold hover:text-ineta-purple transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
