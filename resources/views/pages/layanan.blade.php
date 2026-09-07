<x-layouts.app title="Layanan — CV. Aksa Karya Fibertek" meta-description="Layanan lengkap CV. Aksa Karya Fibertek: manufaktur custom, pengiriman nasional, instalasi, garansi, konsultasi teknis, perawatan berkala, serta service/maintenance tanki.">

    {{-- Page Header --}}
    <section class="bg-slate-900 py-20 px-4 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-cyan-600 rounded-full blur-3xl translate-y-1/2 -translate-x-1/3"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10 text-center">
            <div class="inline-block bg-cyan-500/20 text-cyan-300 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-4">Layanan Kami</div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">Solusi Lengkap dari<br><span class="text-cyan-400">Awal hingga Akhir</span></h1>
            <p class="text-slate-400 text-base max-w-xl mx-auto">
                Kami menyediakan layanan end-to-end mulai dari konsultasi teknis, manufaktur, pengiriman, hingga instalasi dan perawatan berkala.
            </p>
        </div>
    </section>

    {{-- Services Grid --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($services as $i => $service)
                    <div class="group bg-white rounded-2xl border border-slate-200 p-7 hover:border-cyan-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="w-14 h-14 bg-cyan-50 border border-cyan-100 rounded-xl flex items-center justify-center mb-5 group-hover:bg-cyan-500 transition-colors duration-300">
                            <svg class="w-7 h-7 text-cyan-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $service['icon'] }}"/>
                            </svg>
                        </div>
                        <div class="text-xs text-slate-400 font-semibold uppercase tracking-wide mb-2">Layanan {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <h2 class="text-lg font-bold text-slate-900 mb-3 group-hover:text-cyan-600 transition-colors duration-200">{{ $service['title'] }}</h2>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl font-bold text-slate-900 mb-3">Alur Kerja Kami</h2>
                <p class="text-slate-500 text-sm max-w-md mx-auto">Proses transparan dan terstruktur untuk memastikan kepuasan Anda di setiap tahap.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                {{-- Connecting line (desktop) --}}
                <div class="hidden lg:block absolute top-8 left-[12.5%] right-[12.5%] h-0.5 bg-slate-200 z-0"></div>
                @foreach([
                    ['01', 'Konsultasi', 'Diskusi kebutuhan proyek Anda dengan tim teknis kami.', 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'],
                    ['02', 'Penawaran', 'Kami siapkan penawaran teknis dan komersial dalam 1x24 jam.', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
                    ['03', 'Produksi', 'Proses manufaktur dengan QC ketat dan laporan progress.', 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                    ['04', 'Kirim & Pasang', 'Pengiriman aman ke lokasi dan instalasi oleh tim ahli kami.', 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7'],
                ] as $step)
                    <div class="relative z-10 text-center">
                        <div class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-lg">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step[3] }}"/>
                            </svg>
                        </div>
                        <div class="text-xs text-cyan-600 font-bold uppercase tracking-widest mb-1">STEP {{ $step[0] }}</div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">{{ $step[1] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ $step[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-slate-50 px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-3">Siap Memulai Proyek Anda?</h2>
            <p class="text-slate-500 text-sm mb-7">Hubungi kami sekarang dan dapatkan konsultasi teknis gratis dari tim ahli kami.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="https://wa.me/6282345651976?text=Halo%20CV.%20Aksa%20Karya%20Fibertek%2C%20saya%20ingin%20konsultasi%20layanan" target="_blank"
                   class="inline-flex items-center justify-center gap-2 bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5">
                    Konsultasi Gratis via WA
                </a>
                <a href="{{ route('kontak') }}"
                   class="inline-flex items-center justify-center gap-2 border-2 border-slate-300 hover:border-cyan-400 text-slate-700 hover:text-cyan-600 font-semibold px-7 py-3.5 rounded-xl transition-all duration-200">
                    Kirim Pesan
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
