<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'INETA - Digital Solutions for Modern Businesses')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ineta: {
                            purple: '#493474',
                            'purple-dark': '#3A2E5A',
                            'purple-light': '#5F4E8C',
                            gold: '#E8A33D',
                            cream: '#F8F5EF',
                        }
                    },
                    fontFamily: {
                        display: ['Sora', 'sans-serif'],
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    borderRadius: {
                        'xl2': '1.25rem',
                    }
                }
            }
        }
    </script>

    @stack('styles')
</head>
<body class="font-sans bg-ineta-cream text-slate-800 antialiased">

    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>
