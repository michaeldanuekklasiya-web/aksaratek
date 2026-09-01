<x-layouts.app title="Aksara Karya — Solusi Tangki & Sanitasi Fiber Presisi Tinggi" meta-description="Produsen tangki air, septic tank, dan produk fiberglass custom bergaransi, tersertifikasi, siap kirim ke seluruh Indonesia.">

    {{-- ============================================================ --}}
    {{-- HERO SLIDER SECTION --}}
    {{-- ============================================================ --}}
    <section class="relative h-screen min-h-[600px] max-h-[800px] overflow-hidden bg-slate-900">

        {{-- Slides --}}
        <div id="hero-slides" class="relative w-full h-full">

            {{-- Slide 1 --}}
            <div class="hero-slide absolute inset-0 transition-opacity duration-700" data-slide="0">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1600&auto=format&fit=crop&q=80"
                     alt="Tangki Fiber Aksara Karya"
                     class="absolute inset-0 w-full h-full object-cover grayscale-[30%]">
                <div class="hero-overlay absolute inset-0"></div>
                <div class="relative z-10 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-2 bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 text-sm font-medium px-4 py-1.5 rounded-full mb-6">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                                Produsen Fiberglass Tersertifikasi
                            </div>
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                                Solusi Tangki &amp;<br>
                                Sanitasi Fiber <span class="text-cyan-400">Presisi Tinggi.</span>
                            </h1>
                            <p class="text-slate-300 text-lg leading-relaxed mb-8 max-w-xl">
                                Produsen tangki air, septic tank, dan produk fiberglass custom dengan standar rekayasa presisi — bergaransi, tersertifikasi, siap kirim ke seluruh Indonesia.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20konsultasi%20gratis" target="_blank"
                                   class="inline-flex items-center justify-center gap-2 bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-0.5">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/>
                                    </svg>
                                    Konsultasi Gratis via WA
                                </a>
                                <a href="{{ route('produk') }}"
                                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-200 hover:bg-white/10">
                                    Lihat Katalog Produk
                                </a>
                            </div>
                            <div class="flex flex-wrap items-center gap-6 mt-8">
                                @foreach(['Tersertifikasi ISO', 'Garansi 10 Tahun', 'Kirim Seluruh Indonesia'] as $badge)
                                    <div class="flex items-center gap-2 text-slate-300 text-sm">
                                        <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        {{ $badge }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="hero-slide absolute inset-0 transition-opacity duration-700 opacity-0" data-slide="1">
                <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=1600&auto=format&fit=crop&q=80"
                     alt="Produk Fiberglass Berkualitas"
                     class="absolute inset-0 w-full h-full object-cover grayscale-[30%]">
                <div class="hero-overlay absolute inset-0"></div>
                <div class="relative z-10 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-2 bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 text-sm font-medium px-4 py-1.5 rounded-full mb-6">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                                Kualitas Premium, Harga Kompetitif
                            </div>
                            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                                Material Terbaik,<br>
                                <span class="text-cyan-400">Garansi 10 Tahun.</span>
                            </h2>
                            <p class="text-slate-300 text-lg leading-relaxed mb-8 max-w-xl">
                                Setiap produk kami menggunakan resin dan serat kaca berkualitas tinggi, tahan UV dan anti korosi untuk ketahanan jangka panjang.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ route('produk') }}"
                                   class="inline-flex items-center justify-center gap-2 bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-0.5">
                                    Lihat Semua Produk
                                </a>
                                <a href="{{ route('tentang') }}"
                                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-200 hover:bg-white/10">
                                    Tentang Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="hero-slide absolute inset-0 transition-opacity duration-700 opacity-0" data-slide="2">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1600&auto=format&fit=crop&q=80"
                     alt="Tim Ahli Aksara Karya"
                     class="absolute inset-0 w-full h-full object-cover grayscale-[30%]">
                <div class="hero-overlay absolute inset-0"></div>
                <div class="relative z-10 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-2 bg-cyan-500/20 border border-cyan-400/40 text-cyan-300 text-sm font-medium px-4 py-1.5 rounded-full mb-6">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                                Layanan End-to-End
                            </div>
                            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                                Dari Desain Hingga<br>
                                <span class="text-cyan-400">Instalasi Selesai.</span>
                            </h2>
                            <p class="text-slate-300 text-lg leading-relaxed mb-8 max-w-xl">
                                Tim teknis kami menangani keseluruhan proses — dari konsultasi, manufaktur, pengiriman, hingga instalasi di lokasi proyek Anda.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ route('layanan') }}"
                                   class="inline-flex items-center justify-center gap-2 bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-0.5">
                                    Lihat Layanan Kami
                                </a>
                                <a href="{{ route('kontak') }}"
                                   class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-200 hover:bg-white/10">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Prev/Next Arrows --}}
        <button id="hero-prev" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-white/20 hover:bg-white/40 text-white rounded-full flex items-center justify-center backdrop-blur-sm transition-all duration-200 hover:scale-110">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button id="hero-next" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-white/20 hover:bg-white/40 text-white rounded-full flex items-center justify-center backdrop-blur-sm transition-all duration-200 hover:scale-110">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        {{-- Dots --}}
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2">
            @for($i = 0; $i < 3; $i++)
                <button class="slider-dot h-2 rounded-full transition-all duration-300 {{ $i === 0 ? 'active bg-cyan-400 w-6' : 'bg-white/50 w-2 hover:bg-white/80' }}"
                        data-dot="{{ $i }}"></button>
            @endfor
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- STATS / PENCAPAIAN SECTION --}}
    {{-- ============================================================ --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                {{-- Image Left --}}
                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80"
                             alt="Pembangunan Proyek Aksara Karya"
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-flex items-center gap-1.5 bg-cyan-500 text-white text-xs font-semibold px-3 py-1.5 rounded-full">
                                <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                                Infrastruktur Nasional
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Stats Right --}}
                <div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-3">
                        Jejak Langkah &amp; <span class="text-cyan-600">Pencapaian</span>
                    </h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8 max-w-md">
                        Dedikasi kami selama lebih dari 15 tahun telah membuahkan hasil nyata dalam penyediaan solusi tangki fiber dan pengelolaan limbah di seluruh penjuru negeri.
                    </p>

                    {{-- Tabs --}}
                    <div class="flex gap-1 bg-white rounded-xl p-1 border border-slate-200 mb-6 w-fit">
                        @foreach(['Angka Kunci', 'Sebaran Proyek', 'Grafik Pertumbuhan'] as $i => $tab)
                            <button class="stats-tab px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200 {{ $i === 0 ? 'bg-white text-cyan-600 shadow-sm border border-slate-200' : 'text-slate-500 hover:text-slate-700' }}"
                                    data-tab="{{ $i }}">
                                {{ $tab }}
                            </button>
                        @endforeach
                    </div>

                    {{-- Tab Content --}}
                    <div id="stats-content-0" class="stats-content">
                        <div class="grid grid-cols-2 gap-4">
                            @foreach([
                                ['15+', 'Tahun Berdiri'],
                                ['2.500+', 'Proyek Selesai'],
                                ['85+', 'Kota Terlayani'],
                                ['1.200+', 'Klien Institusi'],
                            ] as [$num, $label])
                                <div class="bg-white rounded-xl p-5 border border-slate-200 hover:border-cyan-300 hover:shadow-md transition-all duration-200 group">
                                    <div class="text-3xl font-bold text-slate-900 group-hover:text-cyan-600 transition-colors duration-200">{{ $num }}</div>
                                    <div class="text-slate-500 text-sm mt-1">{{ $label }}</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-5 bg-white rounded-xl p-4 border border-slate-200">
                            <div class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">Distribusi Kategori Produk</div>
                            @foreach([['Tangki Air', 45], ['Septic Tank', 30], ['Sistem IPAL', 15], ['Lainnya', 10]] as [$cat, $pct])
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="text-sm text-slate-600 w-24 shrink-0">{{ $cat }}</span>
                                    <div class="flex-1 h-2 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="h-2 bg-cyan-500 rounded-full" style="width: {{ $pct }}%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700 w-8 text-right">{{ $pct }}%</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div id="stats-content-1" class="stats-content hidden">
                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                            <p class="text-slate-600 text-sm mb-4">Proyek telah tersebar di 85+ kota di seluruh Indonesia, dari Sabang sampai Merauke.</p>
                            <div class="grid grid-cols-3 gap-3">
                                @foreach(['Sumatera', 'Jawa', 'Kalimantan', 'Sulawesi', 'Bali & NT', 'Papua'] as $island)
                                    <div class="text-center p-3 bg-cyan-50 rounded-lg border border-cyan-100">
                                        <div class="text-xs text-cyan-700 font-medium">{{ $island }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div id="stats-content-2" class="stats-content hidden">
                        <div class="bg-white rounded-xl p-6 border border-slate-200">
                            <p class="text-slate-500 text-sm mb-4">Pertumbuhan proyek dari tahun ke tahun:</p>
                            @foreach([[2020, 180], [2021, 220], [2022, 310], [2023, 420], [2024, 510], [2025, 640]] as [$year, $val])
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="text-sm text-slate-500 w-10">{{ $year }}</span>
                                    <div class="flex-1 h-3 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="h-3 bg-gradient-to-r from-cyan-500 to-cyan-400 rounded-full transition-all duration-700" style="width: {{ round($val / 640 * 100) }}%"></div>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 w-10 text-right">{{ $val }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- PRODUK UNGGULAN SECTION --}}
    {{-- ============================================================ --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-block bg-cyan-50 text-cyan-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-3">Produk Unggulan</div>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Solusi Terlengkap untuk<br>Kebutuhan Anda</h2>
                <p class="text-slate-500 text-base max-w-xl mx-auto">
                    Dari tangki air hingga sistem pengolahan limbah, semua tersedia dengan kualitas premium dan garansi resmi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($products as $product)
                    <a href="{{ route('produk.detail', $product['slug']) }}"
                       class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:border-cyan-300 hover:shadow-xl transition-all duration-300 flex flex-col">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="{{ $product['image'] }}"
                                 alt="{{ $product['name'] }}"
                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <div class="inline-block bg-slate-100 text-slate-600 text-xs font-medium px-2.5 py-0.5 rounded-full mb-3 w-fit">{{ $product['category'] }}</div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $product['name'] }}</h3>
                            <p class="text-slate-500 text-sm leading-relaxed flex-1">{{ $product['short_desc'] }}</p>
                            <div class="flex items-center gap-1.5 text-cyan-600 text-sm font-semibold mt-4 group-hover:gap-3 transition-all duration-200">
                                Detail Produk
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('produk') }}"
                   class="inline-flex items-center gap-2 border-2 border-cyan-500 text-cyan-600 hover:bg-cyan-500 hover:text-white font-semibold px-8 py-3 rounded-xl transition-all duration-200">
                    Lihat Semua Produk
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- KENAPA MEMILIH AKSARA KARYA SECTION --}}
    {{-- ============================================================ --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                {{-- Left: Text --}}
                <div>
                    <div class="inline-block bg-cyan-50 text-cyan-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-4">Keunggulan Kami</div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Kenapa Memilih Aksara Karya?</h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">
                        Kami tidak hanya memproduksi tangki, kami merekayasa solusi. Setiap produk melewati QC ketat untuk memastikan durabilitas maksimal di segala kondisi cuaca.
                    </p>

                    <div class="space-y-5">
                        @foreach([
                            [
                                'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                                'title' => 'Material Premium',
                                'desc' => 'Menggunakan resin dan serat kaca berkualitas tinggi, tahan UV dan anti korosi.',
                            ],
                            [
                                'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                                'title' => 'Custom Engineering',
                                'desc' => 'Bisa menyesuaikan dimensi dan spesifikasi sesuai kebutuhan proyek Anda.',
                            ],
                            [
                                'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                                'title' => 'Layanan End-to-End',
                                'desc' => 'Mulai dari desain, manufaktur, pengiriman, hingga instalasi di lokasi.',
                            ],
                        ] as $feature)
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-cyan-50 border border-cyan-100 rounded-xl flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $feature['icon'] }}"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-900 mb-1">{{ $feature['title'] }}</h3>
                                    <p class="text-slate-500 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('tentang') }}"
                           class="inline-flex items-center gap-2 text-cyan-600 hover:text-cyan-700 font-semibold text-sm transition-colors duration-200">
                            Pelajari Lebih Lanjut Tentang Kami
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Right: Image + Badge --}}
                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&auto=format&fit=crop&q=80"
                             alt="Fasilitas Pabrik Aksara Karya"
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-br from-transparent to-slate-900/40"></div>
                    </div>
                    {{-- Badge --}}
                    <div class="absolute -bottom-5 -right-5 bg-white rounded-2xl shadow-xl p-5 flex items-center gap-4 border border-slate-100">
                        <div class="w-14 h-14 bg-slate-900 rounded-xl flex items-center justify-center text-white font-bold text-xl shrink-0">15+</div>
                        <div>
                            <div class="font-semibold text-slate-900 text-sm leading-tight">Tahun Pengalaman</div>
                            <div class="text-slate-500 text-xs">Manufaktur</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- PARTNER & SPONSORSHIP SECTION --}}
    {{-- ============================================================ --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Partner &amp; Sponsorship</h2>
                <p class="text-slate-500 text-base max-w-xl mx-auto">
                    Didukung oleh perusahaan dan lembaga terkemuka yang berbagi visi dengan kami dalam menciptakan infrastruktur sanitasi modern.
                </p>
            </div>

            {{-- Partner Slider --}}
            <div class="relative">
                <div id="partner-slider" class="overflow-hidden">
                    <div id="partner-track" class="flex gap-6 transition-transform duration-500">
                        @foreach($partners as $i => $partner)
                            <div class="partner-card shrink-0 w-64 bg-white rounded-2xl border border-slate-200 p-6 hover:border-cyan-300 hover:shadow-lg transition-all duration-300 group">
                                <div class="w-16 h-16 rounded-xl overflow-hidden mb-4 border border-slate-100">
                                    <img src="{{ $partner['image'] }}" alt="{{ $partner['name'] }}" class="w-full h-full object-cover">
                                </div>
                                <h3 class="font-semibold text-slate-900 mb-2 group-hover:text-cyan-600 transition-colors duration-200">{{ $partner['name'] }}</h3>
                                <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-3">{{ $partner['desc'] }}</p>
                                <a href="#" class="text-cyan-600 text-xs font-semibold hover:underline">Lihat Detail →</a>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Arrows --}}
                <button id="partner-prev" class="absolute -left-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white border border-slate-200 hover:border-cyan-300 hover:bg-cyan-50 rounded-full shadow-md flex items-center justify-center transition-all duration-200 z-10">
                    <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button id="partner-next" class="absolute -right-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white border border-slate-200 hover:border-cyan-300 hover:bg-cyan-50 rounded-full shadow-md flex items-center justify-center transition-all duration-200 z-10">
                    <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                {{-- Dots --}}
                <div class="flex items-center justify-center gap-2 mt-6">
                    @for($i = 0; $i < 2; $i++)
                        <button class="partner-dot w-8 h-8 rounded-full border-2 flex items-center justify-center text-xs font-semibold transition-all duration-200 {{ $i === 0 ? 'bg-cyan-500 border-cyan-500 text-white' : 'border-slate-300 text-slate-500 hover:border-cyan-300' }}"
                                data-dot="{{ $i }}">{{ $i + 1 }}</button>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- JAVASCRIPT --}}
    {{-- ============================================================ --}}
    <script>
    // ── Hero Slider ──────────────────────────────────────────────
    (function () {
        const slides = document.querySelectorAll('.hero-slide');
        const dots   = document.querySelectorAll('[data-dot]');
        const total  = slides.length;
        let current  = 0;
        let timer    = null;

        function goTo(n) {
            slides[current].classList.add('opacity-0');
            slides[current].classList.remove('opacity-100');
            dots[current].classList.remove('active', 'bg-cyan-400', 'w-6');
            dots[current].classList.add('bg-white/50', 'w-2');

            current = (n + total) % total;

            slides[current].classList.remove('opacity-0');
            slides[current].classList.add('opacity-100');
            dots[current].classList.add('active', 'bg-cyan-400', 'w-6');
            dots[current].classList.remove('bg-white/50', 'w-2');
        }

        function startTimer() { timer = setInterval(() => goTo(current + 1), 5000); }
        function resetTimer()  { clearInterval(timer); startTimer(); }

        document.getElementById('hero-prev').addEventListener('click', () => { goTo(current - 1); resetTimer(); });
        document.getElementById('hero-next').addEventListener('click', () => { goTo(current + 1); resetTimer(); });
        document.querySelectorAll('[data-dot]').forEach(d => {
            d.addEventListener('click', () => { goTo(Number(d.dataset.dot)); resetTimer(); });
        });

        startTimer();
    })();

    // ── Stats Tabs ───────────────────────────────────────────────
    (function () {
        const tabs     = document.querySelectorAll('.stats-tab');
        const contents = document.querySelectorAll('.stats-content');

        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const i = Number(tab.dataset.tab);

                tabs.forEach(t => {
                    t.classList.remove('bg-white', 'text-cyan-600', 'shadow-sm', 'border', 'border-slate-200');
                    t.classList.add('text-slate-500');
                });
                tab.classList.add('bg-white', 'text-cyan-600', 'shadow-sm', 'border', 'border-slate-200');
                tab.classList.remove('text-slate-500');

                contents.forEach(c => c.classList.add('hidden'));
                document.getElementById('stats-content-' + i).classList.remove('hidden');
            });
        });
    })();

    // ── Partner Slider ───────────────────────────────────────────
    (function () {
        const track     = document.getElementById('partner-track');
        const dots      = document.querySelectorAll('.partner-dot');
        const cardWidth = 256 + 24; // w-64 + gap-6
        const visible   = Math.floor(document.getElementById('partner-slider').offsetWidth / cardWidth);
        let   page      = 0;
        const pages     = dots.length;

        function goTo(p) {
            page = Math.max(0, Math.min(p, pages - 1));
            track.style.transform = `translateX(-${page * visible * cardWidth}px)`;
            dots.forEach((d, i) => {
                d.classList.toggle('bg-cyan-500', i === page);
                d.classList.toggle('border-cyan-500', i === page);
                d.classList.toggle('text-white', i === page);
                d.classList.toggle('border-slate-300', i !== page);
                d.classList.toggle('text-slate-500', i !== page);
            });
        }

        document.getElementById('partner-prev').addEventListener('click', () => goTo(page - 1));
        document.getElementById('partner-next').addEventListener('click', () => goTo(page + 1));
        dots.forEach(d => d.addEventListener('click', () => goTo(Number(d.dataset.dot))));
    })();
    </script>
</x-layouts.app>
