@props([
    'title' => 'CV. Aksa Karya Fibertek Solusi Tangki & Sanitasi Fiber Presisi Tinggi',
    'metaDescription' => 'CV. Aksa Karya Fibertek Produsen tangki air, septic tank, dan produk fiberglass custom bergaransi, tersertifikasi, siap kirim ke seluruh Indonesia.',
    'metaKeywords' => 'tangki fiberglass, septic tank biotech, IPAL, grease trap, aksa karya fibertek, tangki air panel',
    'canonicalUrl' => null,
    'ogImage' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200&h=630&fit=crop&q=80',
    'ogType' => 'website',
])
@php
    $canonical = $canonicalUrl ?? url()->current();
@endphp
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta name="author" content="CV. Aksa Karya Fibertek">
    
    <title>{{ $title }}</title>

    {{-- SEO Canonical --}}
    <link rel="canonical" href="{{ $canonical }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:site_name" content="CV. Aksa Karya Fibertek">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonical }}">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Schema.org Organization / LocalBusiness --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "LocalBusiness",
      "name": "CV. Aksa Karya Fibertek",
      "image": "{{ asset('images/logo.webp') }}",
      "@@id": "{{ url('/') }}",
      "url": "{{ url('/') }}",
      "telephone": "+6282345651976",
      "email": "aksakaryafibertek@gmail.com",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Workshop CV. Aksa Karya Fibertek",
        "addressLocality": "Tangerang",
        "addressRegion": "Banten",
        "postalCode": "15122",
        "addressCountry": "ID"
      },
      "hasMap": "https://maps.app.goo.gl/Sk7qvzbi3r7bTGVF7?g_st=aw"
    }
    </script>
    
    @stack('structured-data')
</head>
<body class="bg-white font-sans antialiased">

    {{-- Navbar --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-sm shadow-sm border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.webp') }}" alt="CV. Aksa Karya Fibertek Logo" class="h-16 w-auto object-contain transition-transform duration-200 group-hover:scale-105">
                    <span class="text-lg sm:text-xl font-bold text-slate-900">CV. Aksa Karya Fibertek<span class="text-blue-500">.</span></span>
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('home') }}" class="nav-link px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : '' }}">
                        Home
                    </a>

                    <a href="{{ route('tentang') }}" class="px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 {{ request()->routeIs('tentang') ? 'text-blue-600 bg-blue-50' : '' }}">
                        Tentang
                    </a>

                    {{-- Produk Dropdown --}}
                    <div class="relative group">
                        <button class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 {{ request()->routeIs('produk*') ? 'text-blue-600 bg-blue-50' : '' }}">
                            Produk
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-1 w-56 bg-white rounded-xl shadow-lg border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="p-2">
                                @foreach([
                                    ['slug' => 'septic-tank', 'name' => 'Septic tank'],
                                    ['slug' => 'talang-air', 'name' => 'Talang Air'],
                                    ['slug' => 'ipal-mbg', 'name' => 'IPAL MBG'],
                                    ['slug' => 'tanki-panel', 'name' => 'Tanki Panel'],
                                    ['slug' => 'toilet-portabel', 'name' => 'Toilet Portabel'],
                                    ['slug' => 'grontank', 'name' => 'Grontank'],
                                    ['slug' => 'toren', 'name' => 'Toren'],
                                    ['slug' => 'tanki-kimia', 'name' => 'Tanki Kimia'],
                                    ['slug' => 'grease-trap', 'name' => 'Grease Trap'],
                                    ['slug' => 'atap-fiber', 'name' => 'Atap Fiber'],
                                    ['slug' => 'stp', 'name' => 'STP'],
                                ] as $item)
                                    <a href="{{ route('produk.detail', $item['slug']) }}" class="block px-3 py-2 text-sm text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">
                                        {{ $item['name'] }}
                                    </a>
                                @endforeach
                                <div class="border-t border-slate-100 my-1"></div>
                                <a href="{{ route('produk') }}" class="block px-3 py-2 text-sm font-medium text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">
                                    Lihat Semua Produk â†’
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Layanan Dropdown --}}
                    <div class="relative group">
                        <button class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 {{ request()->routeIs('layanan') ? 'text-blue-600 bg-blue-50' : '' }}">
                            Layanan
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-1 w-56 bg-white rounded-xl shadow-lg border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="p-2">
                                @foreach([
                                    'Manufaktur Custom',
                                    'Pengiriman Nasional',
                                    'Instalasi & Commissioning',
                                    'Garansi & After Sales',
                                    'Konsultasi Teknis',
                                    'Perawatan Berkala',
                                    'Service/Maintenance Tanki',
                                ] as $layanan)
                                    <a href="{{ route('layanan') }}" class="block px-3 py-2 text-sm text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">
                                        {{ $layanan }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    
                    <a href="{{ route('kontak') }}" class="px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 {{ request()->routeIs('kontak') ? 'text-blue-600 bg-blue-50' : '' }}">
                        Kontak
                    </a>
                </div>

                {{-- CTA Button --}}
                <div class="hidden lg:flex items-center">
                    <a href="https://wa.me/6282345651976?text=Halo%20CV.%20Aksa%20Karya%20Fibertek%2C%20saya%20ingin%20konsultasi%20gratis" target="_blank"
                       class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-400 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-all duration-200 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/>
                        </svg>
                        Konsultasi Gratis
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors duration-200">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="lg:hidden hidden border-t border-slate-100 bg-white">
            <div class="px-4 py-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">Home</a>
                <a href="{{ route('produk') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">Produk</a>
                <a href="{{ route('layanan') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">Layanan</a>
                <a href="{{ route('tentang') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">Tentang</a>
                <a href="{{ route('kontak') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-150">Kontak</a>
                <div class="pt-2 pb-1">
                    <a href="https://wa.me/6282345651976" target="_blank"
                       class="flex items-center justify-center gap-2 bg-blue-500 hover:bg-blue-400 text-white text-sm font-semibold px-4 py-3 rounded-lg transition-colors duration-200">
                        Konsultasi Gratis via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="pt-16">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-slate-900 text-white">
        {{-- CTA Banner --}}
        <div class="bg-gradient-to-r from-slate-900 via-blue-900 to-blue-600 py-16 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Mulai Proyek Anda Bersama Ahlinya</h2>
                <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                    Tim teknis kami siap membantu menghitung kebutuhan kapasitas dan memberikan rekomendasi terbaik untuk proyek Anda.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="https://wa.me/6282345651976?text=Halo%2C%20saya%20ingin%20konsultasi%20proyek" target="_blank"
                       class="inline-flex items-center gap-2 bg-white text-slate-900 hover:bg-blue-50 font-semibold px-8 py-3.5 rounded-xl transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5 w-full sm:w-auto justify-center">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/>
                        </svg>
                        Hubungi via WhatsApp
                    </a>
                    <a href="{{ route('kontak') }}"
                       class="inline-flex items-center gap-2 border-2 border-white/40 hover:border-white text-white font-semibold px-8 py-3.5 rounded-xl transition-all duration-200 hover:bg-white/10 w-full sm:w-auto justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Kirim Email Permintaan
                    </a>
                </div>
            </div>
        </div>

        {{-- Footer Links --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                {{-- Brand --}}
                <div class="lg:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/logo.webp') }}" alt="CV. Aksa Karya Fibertek Logo" class="h-10 w-auto object-contain bg-white/10 p-1 rounded-lg">
                        <span class="text-xl font-bold text-white">CV. Aksa Karya Fibertek<span class="text-blue-400">.</span></span>
                    </a>
                    <p class="text-slate-400 text-sm leading-relaxed mb-5">
                        Solusi tangki & sanitasi fiber yang direkayasa untuk bertahan lama.
                    </p>
                    <!-- <div class="flex gap-3">
                        @foreach(['M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9', 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9', 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'] as $icon)
                            <a href="#" class="w-9 h-9 bg-slate-800 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors duration-200">
                                <svg class="w-4 h-4 text-slate-400 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/>
                                </svg>
                            </a>
                        @endforeach
                    </div> -->
                </div>

                {{-- Navigasi --}}
                <div>
                    <h4 class="text-white font-semibold mb-4">Navigasi</h4>
                    <ul class="space-y-2.5">
                        @foreach([['Home', 'home'], ['Produk', 'produk'], ['Layanan', 'layanan'], ['Tentang', 'tentang'], ['Kontak', 'kontak']] as [$label, $route])
                            <li>
                                <a href="{{ route($route) }}" class="text-slate-400 hover:text-blue-400 text-sm transition-colors duration-150">
                                    {{ $label }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Produk Kami --}}
                <div>
                    <h4 class="text-white font-semibold mb-4">Produk Kami</h4>
                    <ul class="space-y-2.5">
                        @foreach([
                            ['Septic tank', 'septic-tank'],
                            ['Talang Air', 'talang-air'],
                            ['IPAL MBG', 'ipal-mbg'],
                            ['Tanki Panel', 'tanki-panel'],
                            ['Toilet Portabel', 'toilet-portabel'],
                            ['Grontank', 'grontank'],
                        ] as [$label, $slug])
                            <li>
                                <a href="{{ route('produk.detail', $slug) }}" class="text-slate-400 hover:text-blue-400 text-sm transition-colors duration-150">
                                    {{ $label }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Kontak --}}
                <div>
                    <h4 class="text-white font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3.5">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <a href="https://maps.app.goo.gl/Sk7qvzbi3r7bTGVF7?g_st=aw" target="_blank" class="text-slate-400 hover:text-blue-400 transition-colors text-sm">Workshop CV. Aksa Karya Fibertek</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-blue-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+6282345651976" class="text-slate-400 hover:text-blue-400 text-sm transition-colors duration-150">+62 823 4565 1976</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-blue-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:aksakaryafibertek@gmail.com" class="text-slate-400 hover:text-blue-400 text-sm transition-colors duration-150">aksakaryafibertek@gmail.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- Copyright --}}
        <div class="border-t border-slate-800 py-5 px-4">
            <p class="text-center text-slate-500 text-sm">
                &copy; {{ date('Y') }} CV. Aksa Karya Fibertek. All rights reserved.
            </p>
        </div>
    </footer>



    {{-- Mobile menu toggle script --}}
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        btn.addEventListener('click', () => {
            const isOpen = !menu.classList.contains('hidden');
            menu.classList.toggle('hidden', isOpen);
            menuIcon.classList.toggle('hidden', !isOpen);
            closeIcon.classList.toggle('hidden', isOpen);
        });
    </script>
</body>
</html>
