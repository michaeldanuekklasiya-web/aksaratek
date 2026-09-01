<x-layouts.app :title="$product['name'] . ' — Aksara Karya'" :meta-description="$product['short_desc']">

    {{-- Breadcrumb --}}
    <section class="bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex items-center gap-2 text-sm text-slate-500">
                <a href="{{ route('home') }}" class="hover:text-cyan-600 transition-colors duration-150">Home</a>
                <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('produk') }}" class="hover:text-cyan-600 transition-colors duration-150">Produk</a>
                <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-slate-900 font-medium">{{ $product['name'] }}</span>
            </nav>
        </div>
    </section>

    {{-- Product Detail --}}
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                {{-- Image --}}
                <div class="rounded-2xl overflow-hidden aspect-[4/3] shadow-xl">
                    <img src="{{ $product['image'] }}"
                         alt="{{ $product['name'] }}"
                         class="w-full h-full object-cover">
                </div>

                {{-- Info --}}
                <div class="lg:sticky lg:top-24">
                    <div class="inline-block bg-cyan-50 text-cyan-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-3">{{ $product['category'] }}</div>
                    <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">{{ $product['name'] }}</h1>
                    <p class="text-slate-600 text-base leading-relaxed mb-8">{{ $product['description'] }}</p>

                    {{-- Specs --}}
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200 mb-8">
                        <h3 class="text-sm font-semibold text-slate-700 uppercase tracking-wide mb-3">Spesifikasi</h3>
                        <ul class="space-y-2">
                            @foreach($product['specs'] as $spec)
                                <li class="flex items-center gap-2.5 text-sm text-slate-600">
                                    <svg class="w-4 h-4 text-cyan-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    {{ $spec }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- CTA --}}
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20tertarik%20dengan%20produk%20{{ urlencode($product['name']) }}" target="_blank"
                           class="flex-1 inline-flex items-center justify-center gap-2 bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-6 py-3.5 rounded-xl transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/>
                            </svg>
                            Minta Penawaran via WA
                        </a>
                        <a href="{{ route('kontak') }}"
                           class="flex-1 inline-flex items-center justify-center gap-2 border-2 border-slate-200 hover:border-cyan-300 text-slate-700 hover:text-cyan-600 font-semibold px-6 py-3.5 rounded-xl transition-all duration-200">
                            Kirim Pertanyaan
                        </a>
                    </div>

                    {{-- Trust Badges --}}
                    <div class="flex flex-wrap gap-3 mt-6">
                        @foreach(['Bergaransi Resmi', 'SNI Tersertifikasi', 'Kirim Se-Indonesia'] as $trust)
                            <span class="inline-flex items-center gap-1.5 text-xs text-slate-600 bg-slate-100 px-3 py-1.5 rounded-full">
                                <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $trust }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Products --}}
    @if($relatedProducts->isNotEmpty())
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-slate-900 mb-8">Produk Terkait Lainnya</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($relatedProducts as $related)
                        <a href="{{ route('produk.detail', $related['slug']) }}"
                           class="group bg-white rounded-2xl border border-slate-200 overflow-hidden hover:border-cyan-300 hover:shadow-lg transition-all duration-300">
                            <div class="aspect-[4/3] overflow-hidden">
                                <img src="{{ $related['image'] }}" alt="{{ $related['name'] }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-5">
                                <h3 class="font-semibold text-slate-900 mb-1 group-hover:text-cyan-600 transition-colors duration-200">{{ $related['name'] }}</h3>
                                <p class="text-slate-500 text-xs leading-relaxed line-clamp-2">{{ $related['short_desc'] }}</p>
                                <div class="flex items-center gap-1 text-cyan-600 text-sm font-semibold mt-3">
                                    Detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @push('structured-data')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org/",
      "@@type": "Product",
      "name": "{{ $product['name'] }}",
      "image": "{{ url($product['image']) }}",
      "description": "{{ $product['short_desc'] }}",
      "brand": {
        "@@type": "Brand",
        "name": "Aksara Karya"
      },
      "offers": {
        "@@type": "AggregateOffer",
        "priceCurrency": "IDR",
        "lowPrice": "1000000",
        "highPrice": "50000000",
        "availability": "https://schema.org/InStock",
        "offerCount": "1"
      }
    }
    </script>
    @endpush
</x-layouts.app>
