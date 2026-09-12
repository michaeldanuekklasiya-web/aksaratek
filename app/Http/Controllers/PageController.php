<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $products = $this->getFeaturedProducts();
        $partners = $this->getPartners();
        $stats = $this->getStats();

        return view('pages.home', compact('products', 'partners', 'stats'));
    }

    public function produk(): View
    {
        $products = $this->getAllProducts();

        return view('pages.produk', compact('products'));
    }

    public function produkDetail(string $slug): View
    {
        $product = collect($this->getAllProducts())->firstWhere('slug', $slug);

        abort_if(! $product, 404);

        $relatedProducts = collect($this->getAllProducts())
            ->where('slug', '!=', $slug)
            ->take(3)
            ->values();

        return view('pages.produk-detail', compact('product', 'relatedProducts'));
    }

    public function layanan(): View
    {
        $services = $this->getServices();

        return view('pages.layanan', compact('services'));
    }

    public function tentang(): View
    {
        return view('pages.tentang');
    }

    public function kontak(): View
    {
        return view('pages.kontak');
    }

    public function sitemap(): Response
    {
        $products = collect($this->getAllProducts());

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $routes = ['home', 'produk', 'layanan', 'tentang', 'kontak'];
        foreach ($routes as $route) {
            $xml .= '<url>';
            $xml .= '<loc>'.route($route).'</loc>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>'.($route === 'home' ? '1.0' : '0.8').'</priority>';
            $xml .= '</url>';
        }

        foreach ($products as $product) {
            $xml .= '<url>';
            $xml .= '<loc>'.route('produk.detail', $product['slug']).'</loc>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.9</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml)->header('Content-Type', 'text/xml');
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function getFeaturedProducts(): array
    {
        return array_slice($this->getAllProducts(), 0, 3);
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function getAllProducts(): array
    {
        return [
            [
                'slug' => 'septic-tank',
                'name' => 'Septic tank',
                'short_desc' => 'Sistem pengolahan limbah ramah lingkungan.',
                'description' => 'Septic tank ramah lingkungan berkualitas tinggi yang mengolah limbah secara efisien.',
                'image' => asset('images/Septic tank.png'),
                'category' => 'Sanitasi',
                'specs' => ['Material: Fiberglass', 'Garansi: 10 Tahun'],
            ],
            [
                'slug' => 'talang-air',
                'name' => 'Talang Air',
                'short_desc' => 'Talang air fiberglass tahan cuaca.',
                'description' => 'Talang air berbahan fiberglass yang kuat dan tahan terhadap cuaca ekstrem.',
                'image' => asset('images/Talang Air.png'),
                'category' => 'Aksesoris',
                'specs' => ['Material: Fiberglass Grade A', 'Garansi: 5 Tahun'],
            ],
            [
                'slug' => 'ipal-mbg',
                'name' => 'IPAL MBG',
                'short_desc' => 'Instalasi Pengolahan Air Limbah MBG.',
                'description' => 'Sistem IPAL MBG yang efisien untuk kebutuhan industri dan medis.',
                'image' => asset('images/IPAL MBG.png'),
                'category' => 'IPAL',
                'specs' => ['Kapasitas: Custom', 'Standar: PerMenLH', 'Garansi: 2 Tahun'],
            ],
            [
                'slug' => 'tanki-panel',
                'name' => 'Tanki Panel',
                'short_desc' => 'Penyimpanan air kapasitas besar untuk gedung.',
                'description' => 'Tangki panel fiberglass sistem modular yang dapat dirakit di lokasi.',
                'image' => asset('images/Tanki Panel.png'),
                'category' => 'Tangki',
                'specs' => ['Material: Panel GRP', 'Instalasi: Modular On-Site'],
            ],
            [
                'slug' => 'toilet-portabel',
                'name' => 'Toilet Portabel',
                'short_desc' => 'Toilet praktis dan mudah dipindahkan.',
                'description' => 'Toilet portabel fiberglass yang higienis, kuat, dan mudah dibersihkan.',
                'image' => asset('images/Toilet Portabel.png'),
                'category' => 'Sanitasi',
                'specs' => ['Material: Fiberglass', 'Sistem: Bio Septic'],
            ],
            [
                'slug' => 'grontank',
                'name' => 'Grontank',
                'short_desc' => 'Tangki tanam berkualitas.',
                'description' => 'Tangki air bawah tanah (ground tank) yang dirancang untuk menahan tekanan tanah.',
                'image' => asset('images/Grontank.png'),
                'category' => 'Tangki',
                'specs' => ['Material: Fiberglass Extra Tebal', 'Garansi: 10 Tahun'],
            ],
            [
                'slug' => 'toren',
                'name' => 'Toren',
                'short_desc' => 'Toren air rumah tangga.',
                'description' => 'Toren air fiber yang tahan lumut dan aman untuk penyimpanan air bersih.',
                'image' => asset('images/Toren.png'),
                'category' => 'Tangki',
                'specs' => ['Material: Fiberglass Anti Lumut', 'Garansi: 10 Tahun'],
            ],
            [
                'slug' => 'tanki-kimia',
                'name' => 'Tanki Kimia',
                'short_desc' => 'Tangki penyimpanan bahan kimia industri.',
                'description' => 'Tangki kimia berbahan fiberglass khusus yang tahan terhadap cairan kimia korosif.',
                'image' => asset('images/Tanki Kimia.png'),
                'category' => 'Tangki Industri',
                'specs' => ['Material: Chemical Grade FRP', 'Garansi: 5 Tahun'],
            ],
            [
                'slug' => 'grease-trap',
                'name' => 'Grease Trap',
                'short_desc' => 'Perangkap lemak untuk dapur komersial.',
                'description' => 'Grease trap fiberglass untuk memisahkan lemak dan minyak dari limbah dapur.',
                'image' => asset('images/Grease Trap.png'),
                'category' => 'Sanitasi',
                'specs' => ['Material: Fiberglass', 'Kapasitas: Beragam'],
            ],
            [
                'slug' => 'atap-fiber',
                'name' => 'Atap Fiber',
                'short_desc' => 'Atap penerangan fiberglass.',
                'description' => 'Atap tembus cahaya (skylight) berbahan fiberglass untuk pabrik dan gudang.',
                'image' => asset('images/Atap Fiber.png'),
                'category' => 'Material Konstruksi',
                'specs' => ['Material: Translucent FRP', 'Garansi: 5 Tahun'],
            ],
            [
                'slug' => 'stp',
                'name' => 'STP',
                'short_desc' => 'Sewage Treatment Plant.',
                'description' => 'Sistem pengolahan air limbah domestik terpusat untuk apartemen dan perumahan.',
                'image' => asset('images/STP.png'),
                'category' => 'IPAL',
                'specs' => ['Kapasitas: Custom', 'Sistem: Aerobic'],
            ],
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function getPartners(): array
    {
        return [
            [
                'name' => 'EcoSanitation Global',
                'desc' => 'Lembaga riset dan pengembangan sistem sanitasi ramah lingkungan berskala internasional.',
                'image' => 'https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?w=200&auto=format&fit=crop&q=80',
            ],
            [
                'name' => 'Artha Konstruksi',
                'desc' => 'Perusahaan pengembang perumahan subsidi dan komersial terintegrasi skala nasional.',
                'image' => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=200&auto=format&fit=crop&q=80',
            ],
            [
                'name' => 'Tirta Mandiri',
                'desc' => 'Penyedia layanan infrastruktur air bersih dan pengelolaan air limbah daerah.',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=200&auto=format&fit=crop&q=80',
            ],
            [
                'name' => 'GreenBuild Indonesia',
                'desc' => 'Asosiasi arsitek dan kontraktor bangunan berkonsep green building berkelanjutan.',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=200&auto=format&fit=crop&q=80',
            ],
            [
                'name' => 'Nusantara Water Solutions',
                'desc' => 'Distributor peralatan pengolahan air terpercaya dengan jaringan di 34 provinsi.',
                'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=200&auto=format&fit=crop&q=80',
            ],
            [
                'name' => 'Hidro Teknik Nusantara',
                'desc' => 'Konsultan rekayasa hidro teknik untuk proyek infrastruktur nasional.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=200&auto=format&fit=crop&q=80',
            ],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function getStats(): array
    {
        return [
            'projects' => '2.500+',
            'cities' => '85+',
            'clients' => '1.200+',
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function getServices(): array
    {
        return [
            [
                'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                'title' => 'Manufaktur Custom',
                'desc' => 'Produksi tangki dan produk fiberglass sesuai spesifikasi dan dimensi yang Anda butuhkan.',
            ],
            [
                'icon' => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7',
                'title' => 'Pengiriman Nasional',
                'desc' => 'Layanan pengiriman ke seluruh Indonesia dengan armada khusus dan keamanan terjamin.',
            ],
            [
                'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                'title' => 'Instalasi & Commissioning',
                'desc' => 'Tim teknisi berpengalaman kami memastikan instalasi yang tepat dan sistem berjalan optimal.',
            ],
            [
                'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'title' => 'Garansi & After Sales',
                'desc' => 'Garansi produk hingga 10 tahun dengan layanan purna jual yang responsif dan profesional.',
            ],
            [
                'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'title' => 'Konsultasi Teknis',
                'desc' => 'Konsultasi gratis dengan engineer kami untuk menentukan solusi terbaik sesuai kebutuhan proyek.',
            ],
            [
                'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                'title' => 'Perawatan Berkala',
                'desc' => 'Program maintenance rutin untuk memastikan performa optimal dan umur panjang produk Anda.',
            ],
            [
                'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
                'title' => 'Service/ Maintenance Tanki',
                'desc' => 'Layanan perbaikan dan perawatan tangki untuk mengatasi kebocoran dan kerusakan.',
            ],
        ];
    }
}
