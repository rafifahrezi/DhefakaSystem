<div class="home-page-wrapper">
    {{-- Section Hero (Dipanggil sebagai Livewire Component) --}}
    @livewire('frontend.pages.hero')
    @livewire('frontend.pages.superior')

    {{-- plan 2 --}}
    <section id="services" class="py-12 md:py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Layanan Kami</h2>
                <p class="text-gray-600 text-lg">Solusi keamanan komprehensif untuk kebutuhan rumah dan bisnis Anda</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
                {{-- grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 --}}
                <!-- Layanan 1 -->
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-lg p-6 md:p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="text-blue-600 mb-5">
                        <svg class="w-10 h-10 md:w-12 md:h-12 mx-auto" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-3 text-gray-800">Pemasangan Profesional</h3>
                    <p class="text-gray-600 text-sm md:text-base">Tim ahli kami siap memasang sistem CCTV dan pagar
                        otomatis dengan cepat dan rapi.</p>
                </div>

                <!-- Layanan 2 -->
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-lg p-6 md:p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="text-blue-600 mb-5">
                        <svg class="w-10 h-10 md:w-12 md:h-12 mx-auto" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-3 text-gray-800">Perawatan & Perbaikan</h3>
                    <p class="text-gray-600 text-sm md:text-base">Layanan perawatan berkala dan perbaikan cepat untuk
                        memastikan sistem Anda selalu optimal.</p>
                </div>

                <!-- Layanan 3 -->
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-lg p-6 md:p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="text-blue-600 mb-5">
                        <svg class="w-10 h-10 md:w-12 md:h-12 mx-auto" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 0a3 3 0 10-4.243 4.243M15.536 17.536a3 3 0 104.243-4.243m-4.243 4.243L12 10.464m-4.243 4.243L5.636 18.364m0 0a3 3 0 104.243 4.243M5.636 18.364L10.464 12m4.243-4.243L18.364 5.636m-4.243-4.243a3 3 0 10-4.243 4.243m4.243-4.243L12 3.536m-4.243 4.243L5.636 1.636">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-3 text-gray-800">Konsultasi Keamanan</h3>
                    <p class="text-gray-600 text-sm md:text-base">Dapatkan saran ahli untuk merancang sistem keamanan
                        yang paling sesuai dengan kebutuhan Anda.</p>
                </div>

                <!-- Layanan 4 (Tambahan untuk xl screen) -->
                <div
                    class="bg-white rounded-xl shadow-md hover:shadow-lg p-6 md:p-8 transform hover:-translate-y-2 transition-all duration-300 hidden xl:block">
                    <div class="text-blue-600 mb-5">
                        <svg class="w-10 h-10 md:w-12 md:h-12 mx-auto" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-3 text-gray-800">Sistem 24/7</h3>
                    <p class="text-gray-600 text-sm md:text-base">Monitoring dan dukungan teknis tersedia 24 jam untuk
                        keamanan tanpa henti.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Service --}}

    {{-- Start Paket --}}
    <section id="pricing" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Paket Harga Terbaik</h2>
                <p class="text-xl text-gray-600">Pilih paket yang sesuai dengan kebutuhan dan budget Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @foreach ($pakets as $paket)
                    <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow relative">
                        @if ($paket->slug === 'premium')
                            <span
                                class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                Terpopuler
                            </span>
                        @endif

                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $paket->name }}</h3>
                            <div class="text-4xl font-bold text-blue-600 mb-2">
                                Rp {{ str_replace('.', ',', number_format($paket->price / 1_000_000, 1)) }} Juta
                            </div>
                            <p class="text-gray-600 mb-8">{{ $paket->description ?? 'Paling banyak dipilih' }}</p>
                        </div>

                        <ul class="space-y-4 mb-8 text-gray-700">
                            @foreach ($paket->features as $feature)
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    {{ $feature->content }}
                                </li>
                            @endforeach
                        </ul>

                        <a
                            class="w-full bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition-colors inline-block text-center">
                            Pilih Paket
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Paket --}}



    {{-- Start Categories --}}
    <div class="bg-gradient-to-br from-orange-100 via-orange-200 to-orange-300 py-20">
        <div class="max-w-3xl mx-auto text-center mb-16 px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                Browse <span class="text-blue-600">Categories</span>
            </h1>
            <div class="flex w-36 mx-auto mt-4 mb-6">
                <div class="flex-1 h-1 bg-blue-200 rounded-l"></div>
                <div class="flex-1 h-1 bg-blue-400"></div>
                <div class="flex-1 h-1 bg-blue-600 rounded-r"></div>
            </div>
            <p class="text-gray-200 text-base md:text-lg">
                Temukan berbagai kategori produk terbaik sesuai kebutuhan Anda. Aman, cepat, dan terpercaya.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($categories as $category)
                    <a href="{{ url('/products') }}?category[]={{ $category->id }}" wire:key="{{ $category->id }}"
                        class="group bg-white rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition duration-300 hover:scale-[1.015] dark:bg-slate-900 dark:border-gray-800">

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center gap-4">
                                    <img src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}"
                                        class="h-12 w-12 rounded-full object-cover shadow-sm">
                                    <h3
                                        class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 dark:text-gray-200 dark:group-hover:text-blue-400">
                                        {{ $category->name }}
                                    </h3>
                                </div>
                                <div class="text-blue-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- End Categories --}}

    @livewire('frontend.pages.contact')
    {{-- <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-10">Apa Kata Klien Kami?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="text-gray-700 italic mb-4">"Instalasi CCTV sangat cepat dan rapi. Kualitas gambar luar biasa di malam hari juga. Sangat direkomendasikan!"</p>
                        <p class="font-semibold text-gray-900">- Budi Santoso</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="text-gray-700 italic mb-4">"Pagar otomatis Dhefaka System sangat modern dan aman. Kontrol via aplikasi juga memudahkan. Pelayanan sangat responsif."</p>
                        <p class="font-semibold text-gray-900">- Siti Aisyah</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <p class="text-gray-700 italic mb-4">"Tim Dhefaka System sangat profesional dari konsultasi hingga purnajual. Keamanan rumah saya kini jauh lebih baik."</p>
                        <p class="font-semibold text-gray-900">- Arya Wijaya</p>
                    </div>
                </div>
            </div>
        </section> --}}

</div>
