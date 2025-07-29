<footer class="bg-gray-900 w-full text-white pt-10 pb-6 md:pt-16 md:pb-8">
    <div class="w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

            <div class="col-span-full lg:col-span-1 text-center lg:text-left">
                <a class="flex justify-center lg:justify-start items-center text-3xl font-extrabold text-blue-400 mb-4" href="#" aria-label="Dhefaka System">
                    Dhefaka System
                </a>
                <p class="text-gray-400 leading-relaxed text-sm max-w-xs mx-auto lg:mx-0">
                    Solusi keamanan terdepan untuk rumah dan bisnis Anda.
                    Melindungi dengan CCTV modern dan pagar otomatis.
                </p>
            </div>
            <div class="col-span-1 text-center md:text-left">
                <h4 class="font-bold text-gray-100 text-lg mb-4">Produk</h4>
                <nav class="grid space-y-3 text-sm">
                    <a class="inline-flex justify-center md:justify-start gap-x-2 text-gray-400 hover:text-blue-300 transition" href="{{ route('products', ['category[]' => 1]) }}">Sistem CCTV</a>
                    <a class="inline-flex justify-center md:justify-start gap-x-2 text-gray-400 hover:text-blue-300 transition" href="{{ route('products', ['category[]' => 2]) }}">Pagar Otomatis</a>
                    <a class="inline-flex justify-center md:justify-start gap-x-2 text-gray-400 hover:text-blue-300 transition" href="{{ route('products', ['category[]' => 3]) }}">Material Bangunan</a>
                    <a class="inline-flex justify-center md:justify-start gap-x-2 text-gray-400 hover:text-blue-300 transition" href="#">Layanan Pemasangan</a>
                </nav>
            </div>
            <div class="col-span-1 text-center md:text-left">
                <h4 class="font-bold text-gray-100 text-lg mb-4">Perusahaan</h4>
                <nav class="grid space-y-3 text-sm">
                    <a class="inline-flex justify-center md:justify-start gap-x-2 text-gray-400 hover:text-blue-300 transition" href="/tentang-kami">Tentang Kami</a>
                    <a class="inline-flex justify-center md:justify-start gap-x-2 text-gray-400 hover:text-blue-300 transition" href="/contact">Contact</a>
                </nav>
            </div>
            <div class="col-span-full md:col-span-2 lg:col-span-1 text-center lg:text-left">
                <h4 class="font-bold text-gray-100 text-lg mb-4">Dapatkan Penawaran Gratis!</h4>
                <p class="text-gray-400 text-sm mb-4">
                    Konsultasikan kebutuhan keamanan Anda dan dapatkan penawaran terbaik dari kami.
                </p>
                {{-- Ini bisa jadi tautan langsung ke halaman kontak atau formulir modal --}}
                <a href="/contact" class="inline-flex justify-center items-center 
                          w-full sm:w-auto p-2.5 gap-x-2 text-sm font-semibold rounded-md 
                          bg-green-600 text-white hover:bg-green-700 transition duration-300 ease-in-out 
                          dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Ajukan Penawaran
                </a>

                {{-- Atau, jika ingin opsi lain seperti WhatsApp/Telepon --}}   
                <p class="text-gray-400 text-sm mt-6">Atau hubungi kami langsung:</p>
                <div class="flex items-center justify-center lg:justify-start gap-x-3 mt-2">
                    <a href="https://wa.me/62895332966383" class="inline-flex items-center gap-x-2 text-gray-400 hover:text-blue-300 transition">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        +62 812-3456-789
                    </a>
                </div>
            </div>
            </div>
        <hr class="border-gray-700 my-8 md:my-12">

        <div class="flex flex-col sm:flex-row justify-between items-center gap-y-4">
            <p class="text-sm text-gray-400 text-center sm:text-left">
                © 2025 Dhefaka System. Hak Cipta Dilindungi Undang-Undang.
            </p>

            <div class="flex space-x-4">
                <a class="w-9 h-9 flex justify-center items-center rounded-full bg-gray-800 text-gray-400 
                          hover:text-white hover:bg-blue-600 transition duration-300 ease-in-out 
                          focus:outline-none focus:ring-2 focus:ring-gray-600" href="#" aria-label="Facebook">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a class="w-9 h-9 flex justify-center items-center rounded-full bg-gray-800 text-gray-400 
                          hover:text-white hover:bg-blue-600 transition duration-300 ease-in-out 
                          focus:outline-none focus:ring-2 focus:ring-gray-600" href="#" aria-label="Google">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                    </svg>
                </a>
                <a class="w-9 h-9 flex justify-center items-center rounded-full bg-gray-800 text-gray-400 
                          hover:text-white hover:bg-blue-600 transition duration-300 ease-in-out 
                          focus:outline-none focus:ring-2 focus:ring-gray-600" href="#" aria-label="Twitter">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                </a>
                <a class="w-9 h-9 flex justify-center items-center rounded-full bg-gray-800 text-gray-400 
                          hover:text-white hover:bg-blue-600 transition duration-300 ease-in-out 
                          focus:outline-none focus:ring-2 focus:ring-gray-600" href="#" aria-label="GitHub">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
            </div>
            </div>
    </div>
</footer>