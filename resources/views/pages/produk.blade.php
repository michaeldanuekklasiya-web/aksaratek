<x-layouts.app title="Katalog Produk | CV. Aksa Karya Fibertek" meta-description="Lihat semua produk fiberglass CV. Aksa Karya Fibertek: tangki air, septic tank, sistem IPAL, grease trap, dan banyak lagi.">

    {{-- Page Header --}}
    <section class="bg-slate-900 py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <div class="inline-block bg-blue-500/20 text-blue-300 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-4">Katalog Produk</div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">Semua Produk Fiberglass</h1>
            <p class="text-slate-400 text-base max-w-xl mx-auto">
                Pilihan produk fiberglass berkualitas premium untuk kebutuhan tangki air, sanitasi, dan pengolahan limbah.
            </p>
        </div>
    </section>

    {{-- Filter Bar --}}
    <section class="bg-white border-b border-slate-200 sticky top-16 z-30 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 py-3 overflow-x-auto">
                @foreach(['Semua', 'Tangki', 'Sanitasi', 'IPAL'] as $i => $cat)
                    <button class="filter-btn shrink-0 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 {{ $i === 0 ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}"
                            data-filter="{{ $i === 0 ? 'all' : strtolower($cat) }}">
                        {{ $cat }}
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Products Grid --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="products-grid">
                @foreach($products as $product)
                    <a href="{{ route('produk.detail', $product['slug']) }}"
                       class="product-item group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:border-blue-300 hover:shadow-xl transition-all duration-300 flex flex-col"
                       data-category="{{ strtolower($product['category']) }}">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="{{ $product['image'] }}"
                                 alt="{{ $product['name'] }}"
                                 class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500 loading='lazy'">
                            <div class="absolute top-3 left-3">
                                <span class="bg-white/90 backdrop-blur-sm text-slate-700 text-xs font-medium px-2.5 py-1 rounded-full">{{ $product['category'] }}</span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h2 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors duration-200">{{ $product['name'] }}</h2>
                            <p class="text-slate-500 text-sm leading-relaxed flex-1">{{ $product['short_desc'] }}</p>

                            <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                                <div class="flex items-center gap-1.5 text-blue-600 text-sm font-semibold group-hover:gap-3 transition-all duration-200">
                                    Detail Produk
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </div>
                                <svg class="w-5 h-5 text-slate-300 group-hover:text-blue-300 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-white">
        <div class="max-w-2xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-slate-900 mb-3">Tidak Menemukan yang Anda Cari?</h2>
            <p class="text-slate-500 text-sm mb-6">Kami menerima pesanan custom sesuai spesifikasi dan dimensi yang Anda butuhkan.</p>
            <a href="https://wa.me/6282345651976?text=Halo%20CV.%20Aksa%20Karya%20Fibertek%2C%20saya%20ingin%20memesan%20produk%20custom" target="_blank"
               class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-400 text-white font-semibold px-7 py-3 rounded-xl transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5">
                Diskusi Kebutuhan Custom
            </a>
        </div>
    </section>

    <script>
    // Filter products by category
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            filterBtns.forEach(b => {
                b.classList.remove('bg-blue-500', 'text-white');
                b.classList.add('bg-slate-100', 'text-slate-600');
            });
            btn.classList.add('bg-blue-500', 'text-white');
            btn.classList.remove('bg-slate-100', 'text-slate-600');

            productItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    </script>
</x-layouts.app>
