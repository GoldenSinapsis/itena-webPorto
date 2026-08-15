<header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <a href="{{ url('/') }}" class="flex items-center gap-3 bg-ineta-purple pl-2 pr-5 py-2">
                <img src="{{ asset('images/logo.png') }}" alt="INETA" class="w-20 h-auto object-cover">
            </a>

            <nav class="hidden lg:flex items-center gap-9">
                @php
                    $links = [
                        'Home' => ['url' => url('/'), 'pattern' => '/'],
                        'About Us' => ['url' => url('/tentang-kami'), 'pattern' => 'tentang-kami'],
                        'Projects' => ['url' => url('/projects'), 'pattern' => 'projects'],
                        'articles' => ['url' => url('/articles'), 'pattern' => 'articles'],
                        'Pricing' => ['url' => url('/harga'), 'pattern' => 'harga'],
                        'Contact' => ['url' => url('/hubungi-kami'), 'pattern' => 'hubungi-kami'],
                    ];
                @endphp
                @foreach ($links as $label => $item)
                    <a href="{{ $item['url'] }}"
                       class="text-sm font-semibold transition-colors {{ request()->is($item['pattern']) ? 'text-ineta-gold' : 'text-slate-700 hover:text-ineta-purple' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>

            <a href="{{ url('/get-started') }}"
               class="hidden sm:inline-flex items-center justify-center rounded-full bg-ineta-purple px-6 py-2.5 text-sm font-semibold text-white hover:bg-ineta-purple-dark transition-colors">
                Get Started
            </a>

            <button type="button" x-data @click="$dispatch('toggle-mobile-menu')"
                    class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-full text-ineta-purple"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden pb-6">
            <nav class="flex flex-col gap-4">
                @foreach ($links as $label => $item)
                    <a href="{{ $item['url'] }}"
                       class="text-sm font-semibold {{ request()->is($item['pattern']) ? 'text-ineta-gold' : 'text-slate-700' }}">
                        {{ $label }}
                    </a>
                @endforeach
                <a href="{{ url('/get-started') }}"
                   class="inline-flex items-center justify-center rounded-full bg-ineta-purple px-6 py-2.5 text-sm font-semibold text-white mt-2">
                    Get Started
                </a>
            </nav>
        </div>
    </div>
</header>
