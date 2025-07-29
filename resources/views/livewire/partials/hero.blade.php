<!-- Hero Section - Static HTML -->
<section class="relative h-96 overflow-hidden">
  <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out">
    
    <!-- Slide 1 -->
    <div class="w-full flex-shrink-0 relative">
      <img 
        src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=400&fit=crop" 
        alt="Solusi Keamanan Terdepan"
        class="w-full h-96 object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white px-4">
          <h1 class="text-4xl md:text-6xl font-bold mb-4">Solusi Keamanan Terdepan</h1>
          <p class="text-xl md:text-2xl mb-8">CCTV & Sistem Keamanan Profesional</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-colors">
            Lihat Produk CCTV
          </button>
        </div>
      </div>
    </div>

    <!-- Slide 2 (disembunyikan secara statis untuk demo) -->
    <!--
    <div class="w-full flex-shrink-0 relative hidden">
      <img 
        src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800&h=400&fit=crop" 
        alt="Akses Kontrol Modern"
        class="w-full h-96 object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white px-4">
          <h1 class="text-4xl md:text-6xl font-bold mb-4">Akses Kontrol Modern</h1>
          <p class="text-xl md:text-2xl mb-8">Sliding Door & Gerbang Otomatis</p>
          <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-colors">
            Jelajahi Sliding Door
          </button>
        </div>
      </div>
    </div>
    -->

  </div>

  <!-- Slide Indicators -->
  <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
    <span class="w-3 h-3 rounded-full bg-white"></span>
    <span class="w-3 h-3 rounded-full bg-white bg-opacity-50"></span>
    <span class="w-3 h-3 rounded-full bg-white bg-opacity-50"></span>
  </div>

  <!-- Previous Button -->
  <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full">
    <i data-lucide="chevron-left" class="w-6 h-6"></i>
  </button>

  <!-- Next Button -->
  <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-2 rounded-full">
    <i data-lucide="chevron-right" class="w-6 h-6"></i>
  </button>
</section>


{{-- Plant 2 --}}
<div class="w-full h-screen bg-gradient-to-r from-blue-200 to-cyan-200 py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Grid -->
      <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center ">
          <div>
              <h1
                  class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                  Keamanan Maksimal dengan <span class="text-blue-600"><br> Dhefaka System</span></h1>
                  <h5 class="text-slate-100 dark:text-white leading-tight mb-4">
                      Solusi terlengkap untuk CCTV pengawasan dan pagar otomatis modern. Lindungi aset dan orang yang Anda sayangi.
                  </h5>

              <!-- Buttons -->
              <div class="mt-7 grid gap-3 w-full sm:inline-flex" wire:navigate>
                  <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                      href="/products">
                      Lihat Produk
                      <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="m9 18 6-6-6-6" />
                      </svg>
                  </a>
                  <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                      href="/contact">
                      Kontak Kami
                  </a>
              </div>
              <!-- End Buttons -->

          </div>
          <!-- End Col -->

          <div class="relative ms-4">
              <img class="w-full rounded-lg"
                  src="img/Herong.png"
                  alt="Image Description">
              <div
                  class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0">
              </div>

          </div>
          <!-- End Col -->
      </div>
      <!-- End Grid -->
  </div>
</div>
