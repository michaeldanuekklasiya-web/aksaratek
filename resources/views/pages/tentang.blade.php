<x-layouts.app title="Tentang Kami — Aksara Karya" meta-description="Mengenal Aksara Karya lebih dekat — produsen tangki fiberglass dengan 15+ tahun pengalaman, tersertifikasi ISO, melayani seluruh Indonesia.">

    {{-- Page Header --}}
    <section class="bg-slate-900 py-20 px-4 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10 text-center">
            <div class="inline-block bg-cyan-500/20 text-cyan-300 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-4">Tentang Kami</div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">
                15+ Tahun Merekayasa<br><span class="text-cyan-400">Solusi Terbaik</span>
            </h1>
            <p class="text-slate-400 text-base max-w-xl mx-auto">
                Dari bengkel kecil di Tangerang hingga menjadi produsen fiberglass terpercaya di Indonesia.
            </p>
        </div>
    </section>

    {{-- Story Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80"
                             alt="Fasilitas Produksi Aksara Karya"
                             class="w-full h-full object-cover">
                    </div>
                    {{-- Stats overlay --}}
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-5 border border-slate-100">
                        <div class="text-3xl font-bold text-slate-900">ISO</div>
                        <div class="text-xs text-slate-500 mt-0.5">Tersertifikasi Internasional</div>
                    </div>
                    <div class="absolute -top-6 -right-6 bg-cyan-500 text-white rounded-2xl shadow-xl p-5">
                        <div class="text-3xl font-bold">2011</div>
                        <div class="text-xs text-cyan-100 mt-0.5">Tahun Berdiri</div>
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-4">Kisah <span class="text-cyan-600">Aksara Karya</span></h2>
                    <div class="space-y-4 text-slate-600 text-sm leading-relaxed">
                        <p>Aksara Karya Utama didirikan pada tahun 2011 oleh sekelompok insinyur berpengalaman yang melihat kebutuhan besar akan produk tangki dan sanitasi berkualitas tinggi di Indonesia.</p>
                        <p>Bermula dari workshop kecil di Kawasan Industri Tangerang dengan hanya 12 karyawan, kami tumbuh menjadi perusahaan manufaktur fiberglass dengan lebih dari 150 tenaga ahli yang tersebar di fasilitas produksi seluas 5 hektar.</p>
                        <p>Hari ini, produk-produk Aksara Karya telah melayani lebih dari 1.200 klien institusi di 85+ kota di seluruh Indonesia — dari rumah sakit, hotel berbintang, pabrik, hingga proyek perumahan subsidi pemerintah.</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-8">
                        @foreach([['150+', 'Tenaga Ahli'], ['5 Ha', 'Luas Pabrik'], ['34', 'Provinsi Terlayani'], ['2011', 'Tahun Berdiri']] as [$num, $label])
                            <div class="bg-slate-50 rounded-xl p-4 border border-slate-200 text-center">
                                <div class="text-2xl font-bold text-cyan-600">{{ $num }}</div>
                                <div class="text-slate-500 text-xs mt-1">{{ $label }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Visi Misi --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-3">Visi &amp; Misi</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl p-8 border border-slate-200 hover:border-cyan-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Visi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Menjadi produsen produk fiberglass terdepan di Asia Tenggara yang diakui atas inovasi, kualitas, dan komitmen terhadap keberlanjutan lingkungan.
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-slate-200 hover:border-cyan-200 hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Misi</h3>
                    <ul class="space-y-2 text-slate-600 text-sm">
                        @foreach([
                            'Menghadirkan produk fiberglass berkualitas dengan harga kompetitif',
                            'Memberikan solusi teknis yang tepat untuk setiap kebutuhan klien',
                            'Mendukung program sanitasi nasional dengan produk standar internasional',
                            'Membangun tim yang kompeten dan berkomitmen tinggi',
                        ] as $misi)
                            <li class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-cyan-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $misi }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Sertifikasi --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-bold text-slate-900 mb-2">Sertifikasi &amp; Penghargaan</h2>
            <p class="text-slate-500 text-sm mb-10">Diakui oleh lembaga sertifikasi nasional dan internasional</p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                @foreach(['ISO 9001:2015', 'SNI 7926:2013', 'BPLHD Approved', 'Kemnaker RI', 'BSN Certified'] as $cert)
                    <div class="bg-slate-50 border border-slate-200 rounded-xl px-6 py-4 hover:border-cyan-300 hover:bg-cyan-50 transition-all duration-200 group">
                        <div class="text-sm font-bold text-slate-700 group-hover:text-cyan-700">{{ $cert }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>
