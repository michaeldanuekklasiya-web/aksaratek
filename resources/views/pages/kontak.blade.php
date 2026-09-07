<x-layouts.app title="Kontak — CV. Aksa Karya Fibertek" meta-description="Hubungi CV. Aksa Karya Fibertek untuk konsultasi, penawaran, atau pertanyaan seputar produk tangki fiberglass dan sistem sanitasi kami.">

    {{-- Page Header --}}
    <section class="bg-slate-900 py-20 px-4 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10 text-center">
            <div class="inline-block bg-cyan-500/20 text-cyan-300 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide mb-4">Hubungi Kami</div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4">Kami Siap Membantu Anda</h1>
            <p class="text-slate-400 text-base max-w-xl mx-auto">
                Tim teknis CV. Aksa Karya Fibertek siap menjawab pertanyaan, memberikan konsultasi, dan menyiapkan penawaran terbaik untuk Anda.
            </p>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

                {{-- Contact Info --}}
                <div class="lg:col-span-2 space-y-6">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Informasi Kontak</h2>
                        <p class="text-slate-500 text-sm">Tersedia Senin–Sabtu, 08.00–17.00 WIB</p>
                    </div>

                    @foreach([
                        [
                            'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
                            'title' => 'Alamat Workshop',
                            'lines' => ['Workshop CV. Aksa Karya Fibertek', 'Klik untuk Buka Google Maps'],
                            'href' => 'https://maps.app.goo.gl/Sk7qvzbi3r7bTGVF7?g_st=aw',
                        ],
                        [
                            'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                            'title' => 'Telepon / WhatsApp',
                            'lines' => ['082345651976'],
                            'href' => 'tel:+6282345651976',
                        ],
                        [
                            'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                            'title' => 'Email',
                            'lines' => ['aksakaryafibertek@gmail.com'],
                            'href' => 'mailto:aksakaryafibertek@gmail.com',
                        ],
                    ] as $contact)
                        <div class="flex items-start gap-4 bg-white rounded-xl p-5 border border-slate-200 hover:border-cyan-300 transition-colors duration-200">
                            <div class="w-11 h-11 bg-cyan-50 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $contact['icon'] }}"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-slate-400 uppercase tracking-wide mb-1">{{ $contact['title'] }}</div>
                                @foreach($contact['lines'] as $line)
                                    @if($contact['href'])
                                        <a href="{{ $contact['href'] }}" target="_blank" class="block text-slate-800 text-sm font-medium hover:text-cyan-600 transition-colors duration-150">{{ $line }}</a>
                                    @else
                                        <div class="text-slate-800 text-sm font-medium">{{ $line }}</div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    {{-- WhatsApp Quick Contact --}}
                    <a href="https://wa.me/6282345651976?text=Halo%20CV.%20Aksa%20Karya%20Fibertek%2C%20saya%20ingin%20konsultasi" target="_blank"
                       class="flex items-center gap-3 bg-green-500 hover:bg-green-400 text-white font-semibold px-5 py-4 rounded-xl transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5 group">
                        <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.464 3.488"/>
                        </svg>
                        <span>Chat WhatsApp Sekarang</span>
                        <svg class="w-4 h-4 ml-auto group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                {{-- Contact Form --}}
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                        <h2 class="text-2xl font-bold text-slate-900 mb-1">Kirim Pesan</h2>
                        <p class="text-slate-500 text-sm mb-7">Isi formulir di bawah dan tim CV. Aksa Karya Fibertek akan menghubungi Anda dalam 1x24 jam.</p>

                        <form id="contact-form" class="space-y-5" onsubmit="handleSubmit(event)">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="nama" class="block text-sm font-medium text-slate-700 mb-1.5">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" id="nama" name="nama" required placeholder="Budi Santoso"
                                           class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200">
                                </div>
                                <div>
                                    <label for="perusahaan" class="block text-sm font-medium text-slate-700 mb-1.5">Perusahaan</label>
                                    <input type="text" id="perusahaan" name="perusahaan" placeholder="PT. Contoh Indonesia"
                                           class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" required placeholder="budi@example.com"
                                           class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200">
                                </div>
                                <div>
                                    <label for="telepon" class="block text-sm font-medium text-slate-700 mb-1.5">No. Telepon <span class="text-red-500">*</span></label>
                                    <input type="tel" id="telepon" name="telepon" required placeholder="082345651976"
                                           class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200">
                                </div>
                            </div>

                            <div>
                                <label for="produk" class="block text-sm font-medium text-slate-700 mb-1.5">Produk yang Diminati</label>
                                <select id="produk" name="produk"
                                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200">
                                    <option value="">-- Pilih Produk --</option>
                                    @foreach([
                                        'Septic tank',
                                        'Talang Air',
                                        'IPAL MBG',
                                        'Tanki Panel',
                                        'Toilet Portabel',
                                        'Grontank',
                                        'Toren',
                                        'Tanki Kimia',
                                        'Grease Trap',
                                        'Atap Fiber',
                                        'STP',
                                        'Service / Maintenance Tanki',
                                        'Lainnya'
                                    ] as $opt)
                                        <option value="{{ $opt }}">{{ $opt }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="pesan" class="block text-sm font-medium text-slate-700 mb-1.5">Pesan / Kebutuhan <span class="text-red-500">*</span></label>
                                <textarea id="pesan" name="pesan" required rows="5" placeholder="Ceritakan kebutuhan Anda, kapasitas tangki yang dibutuhkan, lokasi proyek, dll..."
                                          class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200 resize-none"></textarea>
                            </div>

                            <button type="submit" id="submit-btn"
                                    class="w-full flex items-center justify-center gap-2 bg-cyan-500 hover:bg-cyan-400 text-white font-semibold px-6 py-4 rounded-xl transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                <span id="btn-text">Kirim Pesan</span>
                            </button>
                        </form>

                        <div id="success-message" class="hidden mt-5 bg-green-50 border border-green-200 rounded-xl p-4 flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-green-700 text-sm font-medium">Pesan berhasil dikirim! Tim kami akan menghubungi Anda segera.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="h-72 bg-slate-200 relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=1600&auto=format&fit=crop&q=80"
             alt="Lokasi CV. Aksa Karya Fibertek"
             class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 flex items-center justify-center">
            <a href="https://maps.app.goo.gl/Sk7qvzbi3r7bTGVF7?g_st=aw" target="_blank" class="bg-white rounded-2xl shadow-xl p-5 text-center max-w-sm mx-4 hover:scale-105 transition-transform duration-200 group">
                <div class="w-10 h-10 bg-cyan-500 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-cyan-400 transition-colors">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="font-semibold text-slate-900 text-sm">CV. Aksa Karya Fibertek</div>
                <div class="text-cyan-600 text-xs font-medium mt-1">Buka Alamat Workshop di Google Maps &rarr;</div>
            </a>
        </div>
    </section>

    <script>
    function handleSubmit(e) {
        e.preventDefault();
        const btn  = document.getElementById('submit-btn');
        const text = document.getElementById('btn-text');

        btn.disabled = true;
        text.textContent = 'Mengirim...';

        setTimeout(() => {
            document.getElementById('contact-form').reset();
            document.getElementById('success-message').classList.remove('hidden');
            btn.disabled = false;
            text.textContent = 'Kirim Pesan';
        }, 1200);
    }
    </script>
</x-layouts.app>
