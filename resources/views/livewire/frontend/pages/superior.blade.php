<div>
    <section id="products" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-12 text-gray-900">Produk Unggulan Kami</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div
                    class="bg-gray-100 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <p>CCTV Camera</p>
                    <img src="./img/Kamera-CCTV.png" alt="CCTV Camera" class="w-full h-56 object-contain">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Sistem CCTV HD & 4K</h3>
                        <p class="text-gray-600 mb-4">
                            Sistem pengawasan canggih dengan kualitas gambar jernih, rekaman 24/7, dan akses jarak jauh.
                        </p>
                        <ul class="text-left text-gray-700 mb-4 list-disc list-inside">
                            <li>Resolusi Tinggi (HD/4K)</li>
                            <li>Infrared Night Vision</li>
                            <li>Deteksi Gerak Cerdas</li>
                            <li>Penyimpanan Cloud/Lokal</li>
                        </ul>
                        <a href="{{ route('products', ['category[]' => 1]) }}">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-gray-100 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <p>Automatic Gate</p>
                    <img src="./img/gate.png" alt="Automatic Gate" class="w-full h-56 object-contain">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Pagar Otomatis Modern</h3>
                        <p class="text-gray-600 mb-4">
                            Pagar otomatis yang kuat, aman, dan mudah dioperasikan untuk kenyamanan dan keamanan
                            properti Anda.
                        </p>
                        <ul class="text-left text-gray-700 mb-4 list-disc list-inside">
                            <li>Sensor Keamanan Anti Jepit</li>
                            <li>Remote Control & Aplikasi</li>
                            <li>Material Tahan Cuaca</li>
                            <li>Desain Elegan</li>
                        </ul>
                        <a href="{{ route('products', ['category[]' => 2]) }}">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>

                {{-- <div
                    class="bg-gray-100 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <p>CCTV Camera</p>
                    <img src="./img/" alt="Smart Home Security" class="w-full h-56 object-contain">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Integrasi Smart Home</h3>
                        <p class="text-gray-600 mb-4">
                            Hubungkan sistem keamanan Anda dengan ekosistem rumah pintar untuk kontrol terpadu.
                        </p>
                        <ul class="text-left text-gray-700 mb-4 list-disc list-inside">
                            <li>Kontrol Terpusat</li>
                            <li>Notifikasi Real-time</li>
                            <li>Kompatibilitas Luas</li>
                            <li>Automatisasi Skenario</li>
                        </ul>
                        <a href="{{ route('products', ['category[]' => 3]) }}">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</div>
