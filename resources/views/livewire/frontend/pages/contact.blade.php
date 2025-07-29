<div id="contact" class="py-20 text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
  <div class="container mx-auto px-4 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold mb-4">Siap Meningkatkan Keamanan Rumah Anda?</h2>
      <p class="text-xl opacity-90 max-w-2xl mx-auto">
        Dapatkan konsultasi gratis dan penawaran terbaik dari tim ahli kami
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="space-y-6">
          <div class="flex items-center space-x-4">
            <div class="bg-white/20 p-3 rounded-lg">
              <!-- Ikon Telepon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l3.5 7-1.5 2.5a9 9 0 006.5 6.5L15 19.5 22 23v-6l-3.5-3.5 2.5-1.5L19 7V5H3z" />
              </svg>
            </div>
            <div>
              <div class="font-semibold">Telepon</div>
              <div class="opacity-90">+62 812-3456-7890</div>
            </div>
          </div>

          <div class="flex items-center space-x-4">
            <div class="bg-white/20 p-3 rounded-lg">
              <!-- Ikon Email -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12l-4-4-4 4m0 0l4 4 4-4m-4-4v8" />
              </svg>
            </div>
            <div>
              <div class="font-semibold">Email</div>
              <div class="opacity-90">info@securehome.id</div>
            </div>
          </div>

          <div class="flex items-center space-x-4">
            <div class="bg-white/20 p-3 rounded-lg">
              <!-- Ikon Alamat -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.656 0 3-1.567 3-3.5S13.656 4 12 4 9 5.567 9 7.5 10.344 11 12 11zm0 2c-2.667 0-8 1.334-8 4v3h16v-3c0-2.666-5.333-4-8-4z" />
              </svg>
            </div>
            <div>
              <div class="font-semibold">Alamat</div>
              <div class="opacity-90">Jl. XYZ</div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8">
        <form id="contactForm" class="space-y-6 font-sans text-white">
          <div>
            <input
              type="text"
              name="name"
              placeholder="Nama Lengkap"
              required
              class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-gray-900 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50"
            />
          </div>
          <div>
            <input
              type="tel"
              name="phone"
              placeholder="Nomor WhatsApp"
              required
              class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30  text-gray-900 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50"
            />
          </div>
          <div>
            <textarea
              name="message"
              placeholder="Ceritakan kebutuhan keamanan Anda..."
              rows="4"
              required
              class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-gray-900 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50 resize-none"
            ></textarea>
          </div>
          <button
            type="submit"
            class="w-full bg-white text-blue-600 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
          >
            Kirim Pesan & Dapatkan Konsultasi Gratis
          </button>
        </form>        
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = this.name.value.trim();
    const phone = this.phone.value.trim();
    const message = this.message.value.trim();

    const fullMessage = `Halo, saya ${name}. Nomor saya ${phone}. Saya ingin berkonsultasi: ${message}`;

    const whatsappNumber = '62895332966383'; // nomor WA tujuan
    const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(fullMessage)}`;

    window.open(whatsappURL, '_blank');
  });
</script>
